<?php
ob_start();
?>


<!-- _____________________________________________________________________ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/admin.css">
    <link rel="icon" href="./img/2.ico" />
    <style>
      h2{
        background-image: linear-gradient(90deg, aqua, blue);
        display: inline-block;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-top: 4% !important;
    }
    .aaa{
      width: 270px;
    }
  /* PHONES */
    @media only screen and (max-width: 600px) {
    .aaa{
        width: 335px;
    }
    h2{
        background-image: linear-gradient(90deg, aqua, blue);
        display: inline-block;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        text-align: center; 
        margin-top: 30% !important;
    }
}
/* LARGE PHONES */
@media only screen and (min-width: 600px) {
    .aaa{
        width: 480px;
    }
    h2{
        background-image: linear-gradient(90deg, aqua, blue);
        display: inline-block;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        text-align: center; 
        margin-top: 20% !important;
    }
}
/* TABLETS */
@media only screen and (min-width: 768px) {
    .aaa{
        width: 115px;
    }
    h2{
        background-image: linear-gradient(90deg, aqua, blue);
        display: inline-block;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        text-align: center; 
        margin-top: 13% !important;
    }
}
/* DESKTOPS */
@media only screen and (min-width: 992px) {
    .aaa{
        width: 180px;
    }
    h2{
        background-image: linear-gradient(90deg, aqua, blue);
        display: inline-block;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        text-align: center; 
        margin-top: 7% !important;
    }
}
/* LARGE */
@media only screen and (min-width: 1200px) {
    .aaa{
        width: 270px;
    }
    h2{
        background-image: linear-gradient(90deg, aqua, blue);
        display: inline-block;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        text-align: center; 
        margin-top: 5% !important;
    }
}
    </style>
</head>
<body style="background-color: black; color: white;">
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
            <button class="btn btn-danger" name="logout_admin" style="margin-right: 3px; margin: 2px;">Logout</button>
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

<?php

session_start();

include_once("./db_conn.php");

if(isset($_POST['logout_admin'])){
  session_destroy();
  header('Location: ./index.php');
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM oed_comments WHERE id=$id"; 
  $result = $conn->query($sql);
  if($result == true){
    echo "<div class='alert alert-danger' style='width: 20rem; margin: 0 auto;'>Comment has been deleted</div>";
    mysqli_close($conn);
    header('Location: ./comments.php');
  }else{
    echo " error in approve";
  }
}



$sql = "SELECT oed_users.username, oed_words.word,oed_comments.comments, oed_comments.id, oed_comments.updated_time 
FROM oed_comments 
JOIN oed_users ON oed_comments.user_id = oed_users.id 
JOIN oed_words ON oed_comments.word_id = oed_words.id 
WHERE oed_comments.user_id = (SELECT id FROM oed_users WHERE oed_comments.user_id = id) AND
oed_comments.word_id = (SELECT id FROM oed_words WHERE oed_comments.word_id = id)";

    $result = mysqli_query($conn,$sql);

    echo '
    <div class="container" style="margin-top: 2%;">
    <div style="text-align: center;">
    <h2>USER COMMENTS</h2>
    </div>
    <div class="row">';
    while($row = mysqli_fetch_array($result))
    {
      $comment_id = $row['id'];
        echo "
        <div class='col-md-3 '>
       
          <div class='card m-2' style='color: black;'>
         
              <h6 style='margin: 5%; color: #7591a1;'>USERNAME :<b style='color: #0961ed;'> @". $row['username'] ."</b><br><br><span style='color: #98a39b;'>Posted on: ". $row['updated_time'] ." </span></h6>
              <h5 style='margin: 5%; color: #383735;'>Word: <b style='color: #a909ed;'>". $row['word'] ."</b></h5>
              <hr>
              <p style='margin: 5%;'><b>". $row['comments'] ."</b></p>
              <hr>
              <a href='approve_comments.php?id=".$row['id']."'>
              <button type='submit' class='btn btn-success m-2 aaa'  name='approve'>Approve</button>
              </a>

              <a href='disapprove_comments.php?id=".$row['id']."'>
              <button type='submit' class='btn btn-warning m-2 aaa'  name='disapprove'>Disapprove</button>
              </a>

              <a href='comments.php?id=".$row['id']."'>
              <button class='btn btn-danger m-2 aaa'  name='delete'>Delete</button>
              </a>
             
          </div>
        
        </div> 
        
        ";
    }
    echo "</div></div>";

?>  






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</body>
</html>
