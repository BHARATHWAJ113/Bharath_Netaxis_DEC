<?php
ob_start();

include("./session.php");

include_once("./db_conn.php");


?>

<!-- _____________________________________________________________________ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/admin.css">
    <link rel="icon" href="./img/2.ico" />
    <style>
      td:hover span{
    width: 50px;
    opacity: 1.0;
    margin-top: 1%;
}
span{
    color: red;
    height: 40px;
    width: 0;
    margin-right: 10px;
    text-align: center;
    display: inline-block;
    transition: 0.3s linear;
    opacity: 0;
}
h2{
        background-image: linear-gradient(90deg, aqua, blue);
        display: inline-block;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
    </style>
</head>
<body style="background-color: black; color: white;">
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
          <li class="nav-item">
            <button id="icon" style='margin-right: 8px; margin-bottom: 3px; margin-top: 3px;' class="btn btn-info">Add Users</button>
          </li>
          <form action="" method="post">
            <a class="btn btn-danger" href="logout" style="margin-right: 3px; margin: 2px;">Logout</a>
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

<div class="container" style="text-align: center; margin-top: 2%;"><h2>USERS LIST</h2></div>
  <div class="container-fluid" style="margin-top: 2%;">
  <div class="row">
    <div class="col-md-8" style="margin: 0 auto;">

  <?php    

      $result = mysqli_query($conn,"SELECT * FROM oed_users");

      echo '
      <table class="table table-hover table-striped bg bg-light" style="border-radius: 10px;">
      <thead>
        <tr>
          <th scope="col" style="color: black;">ID</th>
          <th scope="col" style="color: black; text-align: center;">Name</th>
          <th scope="col" style="color: black; text-align: center;">Email</th>
        </tr>
      </thead>';

      while($row = mysqli_fetch_array($result))
      {
          echo "<tbody>";
          echo "<tr>";
          echo "<td style='color: black;'>
          <span>
            <a href='./delete_users.php?id=".$row['id']."'>
              <i class='bi bi-trash-fill' style='font-size:25px;color:red;'></i>
            </a>
          </span>" . $row['id'] . "</td>";
          echo "<td style='color: black; text-align: center;'>" . $row['username'] . "</td>";
          echo "<td style='color: black; text-align: center;'>" . $row['email'] . "</td>";
          echo "</tr>";
          echo "</tbody>";
      }
      echo "</table>";
      echo "</div>";

      // INSERT Users
      $error = "";

      if(isset($_POST['submit'])) {
          $username = $_POST['name'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          // ENCRIPT
          $encrypt = md5($password);

      $sql = "INSERT INTO oed_users (username,email, password, is_admin ) VALUES ('$username', '$email', '$encrypt', 0)";

          if (!preg_match("/^[a-zA-Z ]*$/",$username)) {  
                  $error = '<div class="alert alert-danger" role="alert"><b>Only alphabets and white space are allowed in Username<b></div>';  
          }else{
              if($username && $email && $password != ""){
                  if($conn->query($sql) === TRUE){
                      $error = '<div class="alert alert-success" role="alert"><b>' .$username. ' VALUE INSERTED SUCCESSFULL<b></div>';
                      // header('Location: users.php');
                  }else{
                      $error = '<div class="alert alert-danger" role="alert"><b>Email ID taken try something else<b></div>';
                  }
              }else{
                  $error = '<div class="alert alert-danger" role="alert"><b>Enter The Required Credentials <b></div>';
              }
          }
      }


  ?>  



    <div class="col-md-4" id="show" style="margin-bottom: 8%; display: none;" >
      <div class="card p-3"  style="width: 23rem; margin: 0 auto; color: black;">
          <form method="post">
              <div class="input-group ">
                  <div style="margin: 2%;">
                  <label for="word">Username:</label>
                      <input type="text" name="name" class="form-control"  id="word" required>
                  </div>
                  <div style="margin: 2%;">
                  <label for="email">Email:</label>
                      <input type="email" name="email" class="form-control"  id="image" required>
                  </div>
                  <div style="margin: 2%;">
                  <label for="pass">Password:</label>
                      <input type="password" name="password" class="form-control" required>
                  </div>
                  <div style="margin-top: 3%; margin-right: 70px; margin-left: 2%;">
                      <button type="submit" class="input-group-text btn btn-primary" name="submit"> Submit</button>
                  </div>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</body>
<script>
  $(document).ready(function() {
    $('#icon').on('click', function() {
        $('#show').show('fast');
    });
});
</script>
</html>
