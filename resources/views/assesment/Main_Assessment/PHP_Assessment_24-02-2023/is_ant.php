<?php
ob_start();
include("config.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Result</title></title>
</head>
<body>
<div class="container mt-5">



<?php


$sql = "SELECT * FROM wb_comments";
$result = $db->query($sql);


$sql = "UPDATE wb_words_data SET is_antonym = 1,is_synonym = 0 WHERE id='" . $_GET['id'] . "'";


if ($db->query($sql) === TRUE) {
    
    
    echo "<div class ='alert alert-success'><b>Word is updated as antonyms successfully</div>";
    header( "Refresh:02; url='adminHome.php'");
    
} else {
    echo "<div class ='alert alert-danger'><b>Error updateting record:" . $db->error . "</div> ";
}



?>
</div>
</body>
</html>