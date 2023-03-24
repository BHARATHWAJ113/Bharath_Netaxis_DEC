<?php
ob_start();
$db = mysqli_connect("192.168.7.11", "bharathwaj_dectrdev_user", "CJ6pqMV01Bk4", "bharathwaj_dectrdev_db",42209);
// Check connection
if (mysqli_connect_errno()) {
  echo "<p class='alert alert-danger'>Failed to connect to DataBase(DB): </p>" . mysqli_connect_error();
}
?>

