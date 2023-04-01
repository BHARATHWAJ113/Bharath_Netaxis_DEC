<?php 
if(isset($_POST["uploadav"])) {
    // echo "check";
    $target_dir_a = "assets/audio/";
    $target_dir_v = "assets/video/";
    $target_file_a = $target_dir_a . basename($_FILES["fileToUploadAudio"]["name"]);
    $target_file_v = $target_dir_v . basename($_FILES["fileToUploadVideo"]["name"]);
    $uploadOk = 1;
    $audioFileType = strtolower(pathinfo($target_file_a,PATHINFO_EXTENSION));
    $videoFileType = strtolower(pathinfo($target_file_v,PATHINFO_EXTENSION));
    $check_a = getimagesize($_FILES["fileToUploadAudio"]["tmp_name"]);
    $check_v = getimagesize($_FILES["fileToUploadVideo"]["tmp_name"]);
    
    // ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
  
    // Check if audio file already exists
    if (file_exists($target_file_a)){
    echo "<p class='alert alert-danger'>Sorry, Audio file already exists.</p>";
    $uploadOk = 0;
    }
    // Check if video file already exists
    if (file_exists($target_file_v)){
      echo "<p class='alert alert-danger'>Sorry, Video file already exists.</p>";
      $uploadOk = 0;
      }
  
    // ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
  
    // Check audio file size
    if ($_FILES["fileToUploadAudio"]["size"] > 50000000) {
    echo "<p class='alert alert-danger'>Sorry, your file is too large.</p>";
    $uploadOk = 0;
    }
    // Check video file size
   if ($_FILES["fileToUploadVideo"]["size"] > 50000000) {
    echo "<p class='alert alert-danger'>Sorry, your file is too large.</p>";
    $uploadOk = 0;
    }
    // ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
  
    // Allow certain file formats
    if($audioFileType != "mp3" && $audioFileType != "wav" ) {
    echo "<p class='alert alert-danger'>Sorry, only mp3 & wav files are allowed.</p>";
    $uploadOk = 0;
    }
    // Allow certain file formats
    if($videoFileType != "mp4" && $videoFileType != "mkv" && $videoFileType != "mov") {
    echo "<p class='alert alert-danger'>Sorry, mkv, mov and mp4 files is allowed.</p>";
    $uploadOk = 0;
    }
    
    // ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    //  Inserting the data to table
  
     // echo "checking";
     extract($_POST);
  
     $sql = "SELECT * FROM rp_data WHERE rp_name='$rp_name' AND rp_email='$rp_email'";
     $checkrows = $db->query($sql);
  
     if($uploadOk == 1){
      if ($checkrows->num_rows > 0) {
          echo "<p class='alert alert-danger'>The Data is already exists</p>";
          $uploadOk = 0;
       } else {
          // echo "$u_image";
          $query = "INSERT INTO rp_data(rp_name, rp_email, rp_video, rp_audio) VALUES('$rp_name', '$rp_email', '$target_file_v', '$target_file_a')";
          echo "<p class='alert alert-success'>The data is inserted sucessfully</p>";
          $result = $db->query($query);
          $uploadOk = 1;
       }
     }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "<p class='alert alert-danger'>Sorry, your file was not uploaded.</p>";
    // if everything is ok, try to upload file
    } else {
    if ((move_uploaded_file($_FILES["fileToUploadAudio"]["tmp_name"], $target_file_a)) && (move_uploaded_file($_FILES["fileToUploadVideo"]["tmp_name"], $target_file_v))) {
      echo "<p class='alert alert-success'>The file ". htmlspecialchars( basename( $_FILES["fileToUploadAudio"]["name"])). ",". htmlspecialchars( basename( $_FILES["fileToUploadVideo"]["name"])). " has been uploaded.</p>";
    } else {
      echo "<p class='alert alert-danger\'>Sorry, there was an error uploading your file.</p>";
    }
    }
 
};


?>