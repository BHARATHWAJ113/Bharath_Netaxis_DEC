<?php
// Check if image file is a actual image or fake image
if(isset($_POST["send"])) {
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

   $sql = "SELECT * FROM user_data WHERE u_name='$u_name' AND u_email='$u_email'";
   $checkrows = $db->query($sql);

   if($uploadOk == 1){
    if ($checkrows->num_rows > 0) {
        echo "<p class='alert alert-danger'>The Data is already exists</p>";
        $uploadOk = 0;
     } else {
        // echo "$u_image";
        $query = "INSERT IGNORE INTO user_data(u_name, u_email, u_image, u_address, u_city, u_state, u_pincode) VALUES('$u_name', '$u_email','$target_file','$u_address','$u_city','$u_state','$u_pincode')";
        echo "<p class='alert alert-success'>The data is inserted sucessfully</p>";
        // $page = $_SERVER['PHP_SELF'];
        // header("Refresh: 0; url=$page");
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




  
};



?>
