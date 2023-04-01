<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="icon" href="./img/2.ico" />
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
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./words.php" style="color: #eb4dc6;">Words</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          
        </ul>
      </div>
    </div>
  </nav>

<div>
<?php


include_once("./db_conn.php");

extract($_POST);
if (isset($_GET['id'])) {
    $id = $_GET['id'];
  $sql = "UPDATE oed_words SET is_approved = 1 WHERE id=$id";
  $result = $conn->query($sql);
  if($result == true){
    echo "<div class='alert alert-success' style='width: 20rem; margin: 0 auto; margin-top: 6%;'>Approve Granted</div>";
  }else{
    echo " error in approve";
  }
}

?>
</div>




</body>
</html>