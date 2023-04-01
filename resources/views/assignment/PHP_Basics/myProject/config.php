<?php
$db = mysqli_connect("localhost", "root", "", "demo");
// Check connection
if (mysqli_connect_errno()) {
  echo "<p class='alert alert-danger'>Failed to connect to DataBase(DB): </p>" . mysqli_connect_error();
}
?>