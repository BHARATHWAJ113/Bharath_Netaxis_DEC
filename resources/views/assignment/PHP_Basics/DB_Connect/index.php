<?php
$con = mysqli_connect("localhost", "root", "", "demo");
// Check connection
if (mysqli_connect_errno()) {
  echo "<p class='alert alert-danger'>Failed to connect to DataBase(DB): </p>" . mysqli_connect_error();
}

$sqll = "SELECT * FROM myguests";
$result = $con->query($sqll);
// $result = mysqli_query($con, "SELECT * FROM myguests");

echo "<table class='table table-success table-striped' border='1'>
<tr class='text-center'>
<th colspan='10'class='text-dark'>User Details</th>
</tr>
<tr>
<th>ID</th>
<th>FirstName</th>
<th>LastName</th>
<th>EMAIL ID</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "</tr>";
}
echo "</table>";

extract($_POST);
if (isset($_REQUEST['btn'])) {
  // echo "checking";

  $sql = "SELECT * FROM myguests WHERE firstname='$firstname' AND email='$email'";
  // $check = mysqli_query($con, "(SELECT * FROM myguests WHERE firstname='$firstname' AND email='$email')");
  // $checkrows = mysqli_num_rows($check);
  $checkrows = $con->query($sql);

  if ($checkrows->num_rows > 0) {
    echo "<p class='alert alert-danger'>The Data is already exists</p>";
  } else {
    //insert results from the form input
    $query = "INSERT IGNORE INTO myguests(firstname, lastname, email) VALUES('$firstname', '$lastname','$email')";
    echo "<p class='alert alert-success'>The data is inserted sucessfully</p>";
    $page = $_SERVER['PHP_SELF'];
    header("Refresh: 0; url=$page");
    $result = $con->query($query);
    }




    $con->close();
    // mysqli_close($con);
  };



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="container bg-light mt-5">
  <div class="box text-center">
    <form method="post">
      <div class="mb-3">
        <label>FirstName</label>
        <input type="text" class="form1" name="firstname" id="firstname" required>

      </div>
      <div class="mb-3">
        <label>LastName</label>
        <input type="text" class="form1" name="lastname" id="lastname" required>

      </div>
      <div class="mb-3">
        <label>EMAIL ID</label>

        <input type="email" class="form1" onChange="javascript:this.value=this.value.toLowerCase();" name="email" id="email">
      </div>
      <button type="submit" name="btn" id="btn" class="btn bg btn-success">Add User Data</button>

    </form>

  </div>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->

</body>

</html>