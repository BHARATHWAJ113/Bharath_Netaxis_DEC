<?php
   include('config.php');
   
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select a_name from user_login where a_email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['a_name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>