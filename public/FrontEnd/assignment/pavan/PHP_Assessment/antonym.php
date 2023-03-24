<?php
ob_start();

include("./session.php");


include("./db_conn.php");

// ADD SYNONYM & ANTONYM

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['an_btn'])){
    $error= "";
    $message = "";

    $upload_error = array(
        0 => 'File is uploaded successfully',
        1 => 'Uploaded file cross the limit',
        2 => 'Uploaded file cross the limit which is mentioned in the HTML form.',
        3 => 'File is partially uploaded or there is any error in between uploading.',
        4 => 'No file was uploaded.',
        6 => 'Missing a temporary folder.',
        7 => 'Failed to write file to disk.',
        8 => 'A PHP extension stopped the uploading process.'
    );

    // Get word and image from form data
    $word1 = $_POST['an_word'];
    $image1 = $_FILES['word_image2']['name'];
    $image_tmp1 = $_FILES['word_image2']['tmp_name'];
    $folder1 = "upload_img";

    $is_synonym = 0;
    $is_antonym = 1;

    $search_word1 = $_SESSION['search_word'];
    
    $sql1 = "SELECT id FROM oed_words WHERE word = '$search_word1' LIMIT 1";
    $result1 = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result1) > 0) {
            $row1 = mysqli_fetch_assoc($result1);
            $parent_id = $row1['id'];

            // WORDS
            $i  = $_SESSION['user_id'];
            $sql2 = "INSERT INTO oed_words (word, image, is_approved, user_id) values ('$word1','$image1', 0 , '$i')";
            
            if($image1 == ""){
                $message = "<div class='alert alert-danger'><b>File Not Found<b></div>" ;
            }else{
                if ($conn->query($sql2) === TRUE) {
                    $word_id2 = $conn->insert_id;  
                  $result = mysqli_query($conn, $sql2);
                  if(move_uploaded_file($image_tmp1, $folder1 ."/". $image1)){
                    header("Location: ./word_sy_an_data.php");
                      $message1 = "<div class='alert alert-success'><b>File Uploaded Successfully dude<b></div>";
                  }else{
                      $error = $_FILES['word_image']['error'];
                      $message = "<div class='alert alert-success'><b>" .$upload_error[$error]. "<b></div>" ;
                  }
                }
    
                // WORDS DATA
                $sql3 = "INSERT INTO oed_words_data (parent_id, word_id, is_synonym, is_antonym) VALUES ($parent_id, $word_id2, $is_synonym, $is_antonym)";
                mysqli_query($conn, $sql3);
                $message =  "<div class='alert alert-success'><b>Word added successfully!<b></div>";
            }
    }else{
    echo "Parent word not found in database.";
}
if (isset($_SESSION['user_id']) || isset($_SESSION['is_admin'])) {
    
  } else {
    header("Location: ./some.php");
  }

}
mysqli_close($conn);
}


?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antonym</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="icon" href="./img/2.ico" />
  <style>
      h2{
        background-image: linear-gradient(90deg, aqua, blue);
        display: inline-block;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
    .iii{
    width: 270px;
}
    @media only screen and (max-width: 600px) {
    .iii{
        width: 335px;
    }
}

    </style>
</head>
<body style="background-color: #f0f4fa;">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="bi bi-book-half"></i> Oxford English Dictionary</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="./index.php" style="color: yellow;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./word.php" style="color: yellow;">Word</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./user_signin.php"><i class="bi bi-person-plus-fill"></i> register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./user_login.php"><i class="bi bi-box-arrow-right"></i> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 

    <div class="container">
        <div class="row">
        <h2 style="text-align: center; margin-top: 3%;">ADD ANTONYM</h2>
            <!-------------->
         <div class="col-md-4" id="hide_add_syno" style="margin: 0 auto; margin-top: 4%;">
                <!-- synonym & antonym -->
                <div class="card p-3" id="card_color"  style="width: 23rem; margin: 0 auto; margin-bottom: 4%; background-color: black; color: white;">
                    <form action="antonym.php" enctype="multipart/form-data" method="POST">
                        <div class="input-group ">
                            <div style="margin: 2%;">
                            <label for="word">Word:</label>
                                <input type="text" name="an_word" class="form-control" required>
                            </div>
                            <div style="margin: 2%;">
                            <label for="image">Image:</label>
                                <input type="file" name="word_image2" class="form-control" required>
                            </div>
                            <div style="margin-top: 3%; margin-right: 70px; margin-left: 2%;">
                                <button type="submit" name="an_btn" class="input-group-text btn btn-primary"> Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          <!-- End -->
        </div>
    </div>
</body>
</html>