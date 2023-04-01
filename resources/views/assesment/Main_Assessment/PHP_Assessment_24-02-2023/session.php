<?php
ob_start();
include("config.php");
session_start();


    $login_session = isset($_SESSION['$user_login']) ? $_SESSION['$user_login']:'Guest' ;
    $word_id = isset($_SESSION['$word_id']) ? $_SESSION['$word_id']:'0' ;

    $entry_path_wb = isset($_SESSION['$entry_path']) ? $_SESSION['$entry_path']:'' ;
    $register_path_wb = isset($_SESSION['$register_path']) ? $_SESSION['$register_path']:'' ;


   

    $sql = "SELECT * FROM wb_users WHERE username='$login_session'";
    $checkrows = $db->query($sql);
    $row = mysqli_fetch_array($checkrows);
    $login_session_id = isset($row['id']) ? $row['id']:'0' ;
?>