<?php
ob_start();

include("./session.php");

include("./db_conn.php");



?>

<!-- _____________________________________________________________________ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/admin.css">
    <link rel="icon" href="./img/2.ico" />
    <style>
      #users_card{
        background: #000046;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #1CB5E0, #000046);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #1CB5E0, #000046); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        box-shadow: 2px 2px 2px 2px #1CB5E0;
      }
      #words_card{
        background: #f4c4f3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #fc67fa, #f4c4f3);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #fc67fa, #f4c4f3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
box-shadow: 2px 2px 2px 2px  #fc67fa;
      }
      #comments_card{
        background: #20002c;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #cbb4d4, #20002c);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #cbb4d4, #20002c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
box-shadow: 2px 2px 2px 2px #cbb4d4;
      }
    </style>
</head>
<body style="background-color: black; color: black;">
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<button style="margin-left: 1%;" class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="bi bi-list"></i></button>
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="bi bi-book-half"></i> Oxford English Dictionary</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php" style="color: yellow;">Home</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <form action="" method="post">
            <a class="btn btn-danger" href="logout.php" style="margin-right: 3px; margin: 4px;">Logout</a>
          </form>
        </ul>
      </div>
    </div>
  </nav>

<!-- SIDE BAR -->
<div class="offcanvas offcanvas-start bg-dark" style="color: white;" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h5>
    <button type="button" style="background-color: white;" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <hr style="width: 390px; margin-left: 1%; margin-bottom: 5%;">
  <div>
  <ul class="navbar-nav me-auto" >
    <li class="nav-item bg-primary">
      <a class="nav-link active" style="margin-left: 5%;" aria-current="page" href="./admin_page.php"><i class="bi bi-house-fill"></i>  Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="margin-left: 5%;" href="./users.php"><i class="bi bi-people-fill"></i>  Users</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="margin-left: 5%;" href="./words.php"><i class="bi bi-file-earmark-word-fill"></i>  Words</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="margin-left: 5%;" href="./comments.php"><i class="bi bi-card-text"></i>  Comments</a>
    </li>
  </ul>
  </div>
</div>

<div class="container-fluid">
  <div id="cards" class="row">
    <div class="col-md-4 " style='width: 30rem; margin: 2%;'>
     <div class="card p-5 bg-info" id="users_card">
      <?php
      $sql = "SELECT COUNT(id) FROM oed_users";
      $result = mysqli_query($conn,$sql);
      $rows = mysqli_fetch_row($result);
        echo  "<h4><i class='bi bi-people-fill'></i> USERS <span style='font-size: 4rem;'><b> ". $rows[0] ."</b></span></h4>";
      ?>
      </div>
    </div>
    <div class="col-md-4 " style='width: 30rem;  margin: 2%;'>
      <div class="card p-5 bg-warning" id="words_card">
      <?php
      $sql1 = "SELECT COUNT(word) FROM oed_words";
      $result1 = mysqli_query($conn,$sql1);
      $rows1 = mysqli_fetch_row($result1);
        echo  "<h4><i class='bi bi-file-earmark-word-fill'></i>  WORDS <span style='font-size: 4rem;'><b> ". $rows1[0] ."</b></span></h4>";
      ?>
      </div>
    </div>
    <div class="col-md-4" style='width: 30rem;  margin: 2%;'>
      <div class="card p-5 bg-success" id="comments_card">
      <?php
      $sql2 = "SELECT COUNT(comments) FROM oed_comments";
      $result2 = mysqli_query($conn,$sql2);
      $rows2 = mysqli_fetch_row($result2);
        echo  "<h4><i class='bi bi-card-text'></i>  COMMENTS <span style='font-size: 4rem;'><b> ". $rows2[0] ."</b></span></h4>";
      ?>
      </div>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</body>
<script>
  $(document).ready(function() {
    $('#users_card').on('click', function() {
      location.href = './users.php';
    });
  });
  $(document).ready(function() {
    $('#words_card').on('click', function() {
      location.href = './words.php';
    });
  });
  $(document).ready(function() {
    $('#comments_card').on('click', function() {
      location.href = './comments.php';
    });
  });
</script>
</html>
