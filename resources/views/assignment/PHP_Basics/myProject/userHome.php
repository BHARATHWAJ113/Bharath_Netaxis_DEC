<?php
session_start();
include('usession.php');
include('upload.php');



?>
<html>

<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Welcome </title>
</head>
<style>
   .imgs {
      height: 110px;
      width: 150px;
   }

   .custom-tooltip {
      --bs-tooltip-bg: var(--bs-primary);
   }
   .hide{
      display: none;
   }
</style>

<body>

   <!-- NAV BAR DECLARE -->

   <?php
   include('userNav.php');
   include('contact.php');
   include('upload.php');
   include('carousel.php');
   include('uploadav.php');
   include('rpuserpage.php');

   ?>

   <!-- Button trigger modal -->

   







   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <script>

   </script>
</body>

</html>