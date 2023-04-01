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



    extract($_POST);

    $sql = "SELECT * FROM stud_mark WHERE id = '" . $_GET['id'] . "'";
    $result = $db->query($sql);

    $row = mysqli_fetch_array($result);

    echo "<div class='container'>
                <form enctype='multipart/form-data' method='post'>
                    <div class='row g-3'>
                        <div class='col-md-12'>
                            <label class='form-label'>Name</label>
                            <input type='text' class='form-control' name='stud_name' value=" . $row['stud_name'] . " Required>
                        </div>
                        <div class='col-md-6'>
                            <label class='form-label'>Tamil</label>
                            <input type='number' class='form-control' name='tamil' value=" . $row['tamil'] . " Required>
                        </div>
                        <div class='col-md-6'>
                            <label class='form-label'>English</label>
                            <input type='number' class='form-control' name='english' value=" . $row['english'] . " Required>
                        </div>
                        <div class='col-md-6'>
                            <label class='form-label'>Maths</label>
                            <input type='number' class='form-control' name='maths' value=" . $row['maths'] . " Required>
                        </div>
                        <div class='col-md-6'>
                            <label class='form-label'>Science</label>
                            <input type='number' class='form-control' name='science' value=" . $row['science'] . " Required>
                        </div>
                        <div class='col-md-6'>
                            <label class='form-label'>Social</label>
                            <input type='number' class='form-control' name='social' value=" . $row['social'] . " Required>
                        </div>
                        <div class='col-md-6'>
                            <button type='submit' name='save' class='btn btn-primary send m-4'>Save</button>
                        </div>
                    </div>
                </form>
            </div>";


    if (isset($_POST["save"])) {
        if (($tamil >= 35) && ($english >= 35) && ($maths >= 35) && ($science >= 35) && ($social >= 35) == TRUE) {
            $grade = '<p class="text-success"><b>PASS</b></p>';
            $total = $tamil + $english + $maths + $science + $social;
            $avg=$total/5;
            $sql = "UPDATE stud_mark SET stud_name='$stud_name', tamil=$tamil, english=$english, maths=$maths, science=$science, social=$social, total=$total, grade='$grade', avg=$avg WHERE id='" . $_GET['id'] . "'";
            $result = $db->query($sql);


            if ($result) {
                $msg = "Successfully Updated!!";
                echo "<script type='text/javascript'>alert('$msg');</script>";
                header('Location:index.php');
            } else {
                $errormsg = "Something went wrong, Try again";
                echo "<script type='text/javascript'>alert('$errormsg');</script>";
            }
        }
        else{
            $grade = '<p class="text-danger"><b>FAIL</b></p>';
            $total = $tamil + $english + $maths + $science + $social;
            $avg=$total/5;
            $sql = "UPDATE stud_mark SET stud_name='$stud_name', tamil=$tamil, english=$english, maths=$maths, science=$science, social=$social, total=$total, grade='$grade', avg=$avg WHERE id='" . $_GET['id'] . "'";
            $result = $db->query($sql);


            if ($result) {
                $msg = "Successfully Updated!!";
                echo "<script type='text/javascript'>alert('$msg');</script>";
                header('Location:index.php');
            } else {
                $errormsg = "Something went wrong, Try again";
                echo "<script type='text/javascript'>alert('$errormsg');</script>";
            }
        }
    }
    ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>