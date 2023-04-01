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



$sql = "UPDATE wb_words_data SET is_aprove_a_s = 0 WHERE id='" . $_GET['id'] . "'";


if ($db->query($sql) === TRUE) {
    echo "<div class ='alert alert-success'><b>Record Updated successfully</div>";
    header( "Refresh:01; url='adminHome.php#task5'");
    
} else {
    echo "<div class ='alert alert-danger'><b>Error updateting record:" . $db->error . "</div> ";
}



?>
</div>
</body>
</html>


