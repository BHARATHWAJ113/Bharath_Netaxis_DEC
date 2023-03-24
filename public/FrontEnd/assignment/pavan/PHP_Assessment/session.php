<?php
ob_start();

include("db_conn.php");
session_start();

$login_session = isset($_SESSION['$user']) ? $_SESSION['$user']:'Guest' ; 
$user_id = isset($_SESSION['$user_id']) ? $_SESSION['$user_id']:' ' ; 


$sql = "SELECT * FROM oed_users WHERE username='$login_session'";
    $checkrows = $conn->query($sql);
    $row = mysqli_fetch_array($checkrows);
    $login_session_id = isset($row['id']) ? $row['id']:'0' ;



?>