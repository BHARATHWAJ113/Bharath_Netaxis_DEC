<?php
ob_start();

include("session.php");

include("db_conn.php");



if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
    if(isset($_POST['word']) && isset($_FILES['image']['tmp_name'])){
      $word = $_POST['word'];
      $image_tmp = $_FILES['image']['tmp_name'];
      $folder = "upload_img";
    }
    
  if(isset($_FILES['image']['name'])){
    $image = $_FILES['image']['name'];
  if($image == ""){
      $message = "<div class='alert alert-danger'><b>File Not Found<b></div>" ;
  }else{
    $s =  $_SESSION['$user_id']; 
    $sql = "INSERT INTO oed_words (word, image, is_approved, user_id) values ('$word','$image', 0 , '$s')";

    if ($conn->query($sql) === TRUE) {
    $word_id = $conn->insert_id;
    $result = mysqli_query($conn, $sql);
    if(move_uploaded_file($image_tmp, $folder ."/". $image)){
        $message1 = "<div class='alert alert-success'><b>File Uploaded Successfully dude<b></div>";
    }else{
        $error = $_FILES['image']['error'];
        $message = "<div class='alert alert-success'><b>" .$upload_error[$error]. "<b></div>" ;
    }
  }
 }
 }

}

//  Disable btn
  if (isset($_SESSION['$user_id']) || isset($_SESSION['$is_admin'])) {
    $disabled = '';
  } else {
    $disabled = 'disabled';
  }



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oxford English Dictionary</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style/header.css">
  <link rel="icon" href="./img/2.ico" />
</head>
<style>
    .loader {
    width: 3em;
    height: 3em;
    font-size: 10px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .loader .face {
    position: absolute;
    border-radius: 50%;
    border-style: solid;
    animation: animate023845 3s linear infinite;
  }
  
  .loader .face:nth-child(1) {
    width: 100%;
    height: 100%;
    color: #c5f0f0;
    border-color: currentColor transparent transparent currentColor;
    border-width: 0.2em 0.2em 0em 0em;
    --deg: -45deg;
    animation-direction: normal;
  }
  
  .loader .face:nth-child(2) {
    width: 70%;
    height: 70%;
    color: lime;
    border-color: currentColor currentColor transparent transparent;
    border-width: 0.2em 0em 0em 0.2em;
    --deg: -135deg;
    animation-direction: reverse;
  }
  
  .loader .face .circle {
    position: absolute;
    width: 50%;
    height: 0.1em;
    top: 50%;
    left: 50%;
    background-color: transparent;
    transform: rotate(var(--deg));
    transform-origin: left;
  }
  
  .loader .face .circle::before {
    position: absolute;
    top: -0.5em;
    right: -0.5em;
    content: '';
    width: 1em;
    height: 1em;
    background-color: currentColor;
    border-radius: 50%;
    box-shadow: 0 0 2em,
                  0 0 4em,
                  0 0 6em,
                  0 0 8em,
                  0 0 10em,
                  0 0 0 0.5em rgba(255, 255, 0, 0.1);
  }
  
  @keyframes animate023845 {
    to {
      transform: rotate(1turn);
    }
  }
  </style>
<body style="background-color: #f0f4fa;">
<!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="bi bi-book-half"></i> Oxford English Dictionary</a>
      <div class="loader">
        <div class="face">
          <div class="circle"></div>
        </div>
        <div class="face">
          <div class="circle"></div>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <button id="icon" style='margin-right: 8px; margin-bottom: 3px;' <?php echo $disabled; ?>
              class="cssbuttons-io-button">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path>
              </svg>
              <span>Add</span>
            </button>
          </li>
          
            <!-- <form action="" method="post"> -->
              <?php 
              echo $login_session; 
              ?>
              <?php if($login_session != 'Guest'){
                echo '<li class="nav-item" id="logout_hide"><a class="btn btn-danger" href="logout.php" style="margin-right: 3px; margin: 4px;">Logout</a></li>';
              }
              if($login_session == 'Guest'){
                echo '<li class="nav-item">
                <a class="nav-link" href="user_signin.php"><i class="bi bi-person-plus-fill"></i> register</a>
               </li>';
              }
               
             if($login_session == 'Guest'){
                echo '<li class="nav-item">
                <a class="nav-link" href="user_login.php"><i class="bi bi-box-arrow-right"></i> Login</a>
              </li>';
              }
               ?>
           
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- // ------------------------------------------------------------------------------------------------------------------------------- -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6" style="margin: 0 auto; margin-bottom: 2%;">
        <!-- Search Words -->
        <div style="width: 18rem;  margin: 0 auto; margin-top: 8%;">
          <form class="d-flex" role="search" method="GET">
            <input class="form-control me-2" style="width: 25rem; " type="search" name="search_term"
              placeholder="Search for a word" aria-label="Search">
            <button class="btn btn-outline-info" type="submit" name="search" style="color: black;">Search</button>
          </form>
          <!-- DISPLAY SEARCH -->
          <?php
          if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $search_term = '';
            if(isset($_GET['search_term'])){
              $search_term = $_GET['search_term'];
              $_SESSION['$search_word'] = $_GET['search_term'];
            }

            $sql1 = "SELECT id, word, image FROM oed_words WHERE word LIKE '%$search_term%' AND is_approved = 1";
            $result1 = $conn->query($sql1);     
            // echo $sql2;

            if(isset($_GET['search'])){
              if(empty($search_term)){
                echo "<div class='alert alert-danger' style='width: 18rem; margin: 0 auto; margin-top: 5%;'>Enter valid word</div>";
              }else{
                while ($row = $result1->fetch_assoc()) {
                  $_SESSION['$display_word_id'] = $row['id'];
                  echo "<br>";
                  echo "<h2 style='margin-top: 2%; text-transform: uppercase; text-decoration: none; color: purple;'><a href='word.php'>" . $row['word'] . "</a></h2>";
                  echo "<img class='img-thumbnail' style='width: 17rem; height: 13rem;' src='./upload_img/" . $row['image'] . "' alt='" . $row['word'] . "'>";
                  echo "<br>";  
                }
              }
            }
            }


              // URL SEARCH
            $searchedWord = explode("/", basename($_SERVER['REQUEST_URI']))[0];
            $_SESSION['$entrypath'] = $searchedWord;
            
            // echo $searchedWord;

            // $searchedWord1 = str_replace("index.php?search_term=","$searchedWord","index.php?search_term=");

            $sql = "SELECT id, word, `image` FROM oed_words WHERE word LIKE '$searchedWord' AND is_approved = 1";
            $result = $conn->query($sql);
   
                  if($searchedWord == "index.php"){

                  }else{
                    if(empty($searchedWord)){
                      echo "<div class='alert alert-danger' style='width: 18rem; margin: 0 auto; margin-top: 5%;'>Enter valid word</div>";
                    }else{
                      while ($row = $result->fetch_assoc()) {
                        $_SESSION['$display_word_id'] = $row['id'];
                        echo "<br>";
                        echo "<h2 style='margin-top: 2%; text-transform: uppercase; text-decoration: none; color: purple;'><a href='word.php'>" . $row['word'] . "</a></h2>";
                        echo "<img class='img-thumbnail' style='width: 17rem; height: 13rem;' src='./upload_img/" . $row['image'] . "' alt='" . $row['word'] . "'>";
                        echo "<br>";  
                      }
                    }
                  }

                  if (isset($_GET["search_term"])) {
                    // ------------------------------------------------------------------------------------------------------------
                        $URL = $conn->real_escape_string($_REQUEST['search_term']);
                        header("location:$URL");
                }
          ?>
        </div>
      </div>

      <!-- image & word & synonym  & antonym -->
      <div class="col-md-6" id="show" style="margin-top: 5%; margin-bottom: 8%; display: none;">
        <div class="card p-3" style="width: 23rem; margin: 0 auto;">
          <form action="index.php" enctype="multipart/form-data" method="post">
            <div>
              <?php  if(!empty($upload_error)){ echo $message; } ?>
            </div>
            <div class="input-group ">
              <div style="margin: 2%;">
                <label for="word">Word:</label>
                <input type="text" name="word" class="form-control" id="word" required>
              </div>
              <div style="margin: 2%;">
                <label for="image">Image:</label>
                <input type="file" name="image" class="form-control" id="image" required>
              </div>
              <div style="margin-top: 3%; margin-right: 70px; margin-left: 2%;">
                <button type="btn" class="input-group-text btn btn-primary" name="submit"> Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

</body>
<script>
  $(document).ready(function () {
    $('#icon').on('click', function () {
      $('#show').show('fast');
      $('#hide_add_syno').hide('fast');
    });
  });
</script>

</html>