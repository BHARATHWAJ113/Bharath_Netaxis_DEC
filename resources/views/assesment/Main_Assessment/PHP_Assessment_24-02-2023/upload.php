<?php
ob_start();
// Check if image file is a actual image or fake image
if(isset($_POST["addword"])) {
 if ($login_session == 'Guest'){
    $add_error = "<p class='alert alert-danger'>To add a new word you must Login or Signup.</p>";
    header("Refresh: 2; url=login.php");
 }else{
  $target_dir = "assets/img/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "<p class='alert alert-success'>File is an image - " . $check["mime"] . ".</p>";
    $uploadOk = 1;
  } else {
    echo "<p class='alert alert-danger'>File is not an image.</p>";
    $uploadOk = 0;
  }


  // Check if file already exists
  if (file_exists($target_file)) {
  echo "<p class='alert alert-danger'>Sorry, file already exists.</p>";
  $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 50000000) {
  echo "<p class='alert alert-danger'>Sorry, your file is too large.</p>";
  $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
  echo "<p class='alert alert-danger'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
  $uploadOk = 0;
  }
  //  Inserting the data to table

   // echo "checking";
   extract($_POST);

   $sql = "SELECT * FROM wb_words WHERE word='$newword'";
   $checkrows = $db->query($sql);

   if($uploadOk == 1){
    if ($checkrows-> num_rows > 0) {
        echo "<p class='alert alert-danger'>The Data is already exists</p>";
        $uploadOk = 0;
     } else {
        // echo "$u_image";
        $query = "INSERT IGNORE INTO wb_words(word,`image`,user_id,w_time) VALUES('$newword', '$target_file', $login_session_id,now())";
        echo "<p class='alert alert-success'>The data is inserted sucessfully</p>";
        
        header( "Refresh:2;");
        $result = $db->query($query);
        $uploadOk = 1;
     }
   }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
  echo "<p class='alert alert-danger'>Sorry, your file was not uploaded.</p>";
  // if everything is ok, try to upload file
  } else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<p class='alert alert-success'>The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.</p>";
  } else {
    echo "<p class='alert alert-danger\'>Sorry, there was an error uploading your file.</p>";
  }
  }
 }




  
};






if (isset($_POST["synonymsbtn"])) {
  // echo "check synom";

  if ($login_session == 'Guest'){
    $add_error = "<p class='alert alert-danger'>To add a new word you must Login or Signup.</p>";
     header("Refresh: 2; url=login.php");
 }else{
  $target_dir = "assets/img/";
  $target_file = $target_dir . basename($_FILES["fileToUploadToSynonyms"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["fileToUploadToSynonyms"]["tmp_name"]);
  if($check !== false) {
    echo "<p class='alert alert-success'>File is an image - " . $check["mime"] . ".</p>";
    $uploadOk = 1;
  } else {
    echo "<p class='alert alert-danger'>File is not an image.</p>";
    $uploadOk = 0;
  }


  // Check if file already exists
  if (file_exists($target_file)) {
  echo "<p class='alert alert-danger'>Sorry, file already exists.</p>";
  $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUploadToSynonyms"]["size"] > 50000000) {
  echo "<p class='alert alert-danger'>Sorry, your file is too large.</p>";
  $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
  echo "<p class='alert alert-danger'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
  $uploadOk = 0;
  }
  //  Inserting the data to table

   // echo "checking";
   extract($_POST);

   $sql = "SELECT * FROM wb_words WHERE word='$newword'";
   $checkrows = $db->query($sql);

   if($uploadOk == 1){
    if ($checkrows-> num_rows > 0) {
        echo "<p class='alert alert-danger'>The Data is already exists</p>";
        $uploadOk = 0;
     } else {
        // echo "$u_image";
        $query = "INSERT IGNORE INTO wb_words(word,`image`,user_id,w_time) VALUES('$newword', '$target_file', $login_session_id,now())";
        echo "<p class='alert alert-success'>The data is inserted sucessfully</p>";
        
        header( "Refresh:3;");
        $result = $db->query($query);
        $word_id_pivit = $db->insert_id;
        $parent_id_pivit=$word_id;
      
        $sqlForSyn="INSERT IGNORE INTO wb_words_data(parent_id,word_id,is_synonym,is_antonym) values($parent_id_pivit,$word_id_pivit,1,0)";
        // echo $sqlForSyn;
        $result = $db->query($sqlForSyn);
        $uploadOk = 1;
     }
   }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
  echo "<p class='alert alert-danger'>Sorry, your file was not uploaded.</p>";
  // if everything is ok, try to upload file
  } else {
  if (move_uploaded_file($_FILES["fileToUploadToSynonyms"]["tmp_name"], $target_file)) {
    echo "<p class='alert alert-success'>The file ". htmlspecialchars( basename( $_FILES["fileToUploadToSynonyms"]["name"])). " has been uploaded.</p>";
  } else {
    echo "<p class='alert alert-danger\'>Sorry, there was an error uploading your file.</p>";
  }
  }
 }

};





 
if (isset($_POST["antonymsbtn"])) {
  // echo "check antonms";

  if ($login_session == 'Guest'){
    $add_error = "<p class='alert alert-danger'>To add a new word you must Login or Signup.</p>";
 }else{
  $target_dir = "assets/img/";
  $target_file = $target_dir . basename($_FILES["fileToUploadToAntonym"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["fileToUploadToAntonym"]["tmp_name"]);
  if($check !== false) {
    echo "<p class='alert alert-success'>File is an image - " . $check["mime"] . ".</p>";
    $uploadOk = 1;
  } else {
    echo "<p class='alert alert-danger'>File is not an image.</p>";
    $uploadOk = 0;
  }


  // Check if file already exists
  if (file_exists($target_file)) {
  echo "<p class='alert alert-danger'>Sorry, file already exists.</p>";
  $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUploadToAntonym"]["size"] > 50000000) {
  echo "<p class='alert alert-danger'>Sorry, your file is too large.</p>";
  $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
  echo "<p class='alert alert-danger'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
  $uploadOk = 0;
  }
  //  Inserting the data to table

   // echo "checking";
   extract($_POST);

   $sql = "SELECT * FROM wb_words WHERE word='$newword'";
   $checkrows = $db->query($sql);

   if($uploadOk == 1){
    if ($checkrows-> num_rows > 0) {
        echo "<p class='alert alert-danger'>The Data is already exists</p>";
        $uploadOk = 0;
     } else {
      $query = "INSERT IGNORE INTO wb_words(word,`image`,user_id,w_time) VALUES('$newword', '$target_file', $login_session_id,now())";
      echo "<p class='alert alert-success'>The data is inserted sucessfully</p>";
      
      header( "Refresh:3;");
      $result = $db->query($query);
      $word_id_pivit = $db->insert_id;
      $parent_id_pivit=$word_id;
    
      $sqlForSyn="INSERT IGNORE INTO wb_words_data(parent_id,word_id,is_synonym,is_antonym) values($parent_id_pivit,$word_id_pivit,0,1)";
      // echo $sqlForSyn;
      $result = $db->query($sqlForSyn);
      $uploadOk = 1;
     }
   }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
  echo "<p class='alert alert-danger'>Sorry, your file was not uploaded.</p>";
  // if everything is ok, try to upload file
  } else {
  if (move_uploaded_file($_FILES["fileToUploadToAntonym"]["tmp_name"], $target_file)) {
    echo "<p class='alert alert-success'>The file ". htmlspecialchars( basename( $_FILES["fileToUploadToAntonym"]["name"])). " has been uploaded.</p>";
  } else {
    echo "<p class='alert alert-danger\'>Sorry, there was an error uploading your file.</p>";
  }
  }
 }


};




