<?php
ob_start();

$servername = "192.168.7.11";
$username = "pavan_dectrdev_user";
$password = "MAWkvpFRBVAB";
$dbname = "pavan_dectrdev_db";
$dbport = "42209";

$error = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $dbport);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>