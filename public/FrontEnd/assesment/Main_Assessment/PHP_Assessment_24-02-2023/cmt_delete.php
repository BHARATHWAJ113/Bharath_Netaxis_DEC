<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
						initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1716af8fd8.js" crossorigin="anonymous"></script>
    <title>Deleted</title>

</head>

<body>
  <?php
  ob_start();
include('config.php');




$sql = "DELETE FROM wb_comments WHERE id='" . $_GET['id'] . "'";


if ($db->query($sql) === TRUE) {
    echo "<div class ='alert alert-danger'><b>Comment is deleted successfully</div>";
    header( "Refresh:02; url='adminHome.php#task3'");
    
  } else {
    echo "<div class ='alert alert-danger'><b>Error deleting comment:" . $db->error. "</div> ";
  }


?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>