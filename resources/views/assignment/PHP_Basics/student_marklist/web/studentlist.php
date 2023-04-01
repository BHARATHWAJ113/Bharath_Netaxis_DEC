<?php
include('config.php');





$error = "";


if (isset($_POST["save"])) {
    extract($_POST);
    $grade = "";
    if(($tamil >= 35) && ($english >= 35) && ($maths >= 35) && ($science >= 35) && ($social >= 35) == TRUE){
        $grade = '<p class="text-success"><b>PASS</b></p>';
        $total = $tamil+$english+$maths+$science+$social;
        $avg=$total/5;
        $sql = "INSERT IGNORE INTO stud_mark(stud_name, tamil, english, maths, science, social, total, grade, avg) VALUES('$stud_name', $tamil, $english, $maths, $science, $social, $total , '$grade', '$avg')";
        if (!preg_match("/^[a-zA-Z ]*$/", $stud_name)) {
            $error = '<div class="alert alert-danger" role="alert"><b>Only alphabets and white space are allowed in Name<b></div>';
        } else {
            if ($db->query($sql) == TRUE) {
                $error = '<div class="alert alert-success" role="alert"><b>The Student Record Updated<b></div>';
            } else {
                $error = '<div class="alert alert-danger" role="alert"><b>The Student Record is Already exist</div>';
            }
        }
    }
    else{
        $grade = '<p class="text-danger"><b>FAIL</b></p>';
        $total = $tamil+$english+$maths+$science+$social;
        $avg=$total/5;
        $sql = "INSERT IGNORE INTO stud_mark(stud_name, tamil, english, maths, science, social, total, grade, avg) VALUES('$stud_name', $tamil, $english, $maths, $science, $social, $total , '$grade', '$avg')";
        if (!preg_match("/^[a-zA-Z ]*$/", $stud_name)) {
            $error = '<div class="alert alert-danger" role="alert"><b>Only alphabets and white space are allowed in Name<b></div>';
        } else {
            if ($db->query($sql) == TRUE) {
                $error = '<div class="alert alert-success" role="alert"><b>The Student Record Updated<b></div>';
            } else {
                $error = '<div class="alert alert-danger" role="alert"><b>The Student Record is Already exist</div>';
            }
        }
    }

   
}
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Tamil</th>
            <th scope="col">English</th>
            <th scope="col">Maths</th>
            <th scope="col">Science</th>
            <th scope="col">Social</th>
            <th scope="col">Total</th>
            <th scope="col">Average</th>
            <th scope="col">Result</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>


        <?php
        extract($_POST);

        $sql = "SELECT * FROM stud_mark";
        $result = $db->query($sql);

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>
                            <th scope='row'>" . $row['id'] . "</th>
                            <td>" . $row['stud_name'] . "</td>
                            <td>" . $row['tamil'] . "</td>
                            <td>" . $row['english'] . "</td>
                            <td>" . $row['maths'] . "</td>
                            <td>" . $row['science'] . "</td>
                            <td>" . $row['social'] . "</td>
                            <td>" . $row['total'] . "</td>
                            <td>" . $row['avg'] . "</td>
                            <td>" . $row['grade'] . "</td>
                            <td><a class='btn btn-danger m-1' href='./delete.php?id=$row[id]'>DELETE</a><a class='btn btn-warning m-1' href='./edit.php?id=$row[id]''>EDIT</a></td>
                            
                        </tr>";
        }

        ?>
        <tr>
            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmodal">
                    ADD
                </button>
            </td>
        </tr>



        <!-- add stud data Modal -->
        <div class="modal fade" id="addmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Student Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form enctype="multipart/form-data" method="post">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="stud_name" Required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Tamil</label>
                                        <input type="number" class="form-control" name="tamil" Required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">English</label>
                                        <input type="number" class="form-control" name="english" Required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Maths</label>
                                        <input type="number" class="form-control" name="maths" Required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Science</label>
                                        <input type="number" class="form-control" name="science" Required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Social</label>
                                        <input type="number" class="form-control" name="social" Required>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" name="save" class="btn btn-primary send m-4">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </tbody>
</table>