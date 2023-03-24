<?php
ob_start();

include_once("./db_conn.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
$sql = "DELETE FROM oed_users WHERE id = $id"; 

if ($conn->query($sql) === TRUE) {
    mysqli_close($conn);
    header('Location: ./users.php'); //where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
}


?>