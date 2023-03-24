<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
						initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1716af8fd8.js" crossorigin="anonymous"></script>
    <title>Student marklist</title>

</head>

<body>
  <?php
include('web/config.php');

$sql = "SELECT * FROM stud_mark";
$result = $db->query($sql);


$sql = "DELETE FROM stud_mark WHERE id='" . $_GET['id'] . "'";


if ($db->query($sql) === TRUE) {
    echo "<div class ='alert alert-danger'><b>Record deleted successfully</div>";
    header('Location:index.php');
    
  } else {
    echo "<div class ='alert alert-danger'><b>Error deleting record:" . $db->error. "</div> ";
  }


?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>