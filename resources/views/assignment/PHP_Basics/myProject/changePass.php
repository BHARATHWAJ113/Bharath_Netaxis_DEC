<?php
if (isset($_POST["updatePass"])) {
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $con_password = $_POST['con_password'];
    $chg_pwd = $db->query("select * from admin where id='1'");
    $chg_pwd1 = mysqli_fetch_array($chg_pwd);
    $data_pwd = $chg_pwd1['passcode'];
    if ($data_pwd == $old_password) {
        if ($new_password == $con_password) {
            $update_pwd = $db->query("update admin set passcode='$new_password' where id='1'");
            $change_pwd_error = "<p class='alert alert-success'>Update Sucessfully !!!</p>";
            $page = $_SERVER['PHP_SELF'];
            header("Refresh: 2; url=$page");
        } else {
            $change_pwd_error = "<p class='alert alert-danger'>Your new and Retype Password is not match !!!</p>";
            $page = $_SERVER['PHP_SELF'];
            header("Refresh: 2; url=$page");
        }
    } else {
        $change_pwd_error = "<p class='alert alert-danger'>Your old password is wrong !!!</p>";
        $page = $_SERVER['PHP_SELF'];
            header("Refresh: 2; url=$page");
    }
    
};
?>




<div class="m-0 p-2 bg-transparent">
    <?php echo $change_pwd_error ?? ' ' ?>
</div>

<div class="modal fade" id="ChangePass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="max-width: 500px !important;">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Change Password</b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contact Form -->

                <div class="container">


                    <div class=" p-4 bg-light text-white border border-2 border-warning" style="border-radius:15px;">


                        <h1 class="text-dark">Change Password</h1>
                        <form method="POST">
                            <table>
                                <td>Enter your existing password:</td>
                                <td><input type="password" class="form-control border border-danger border-2 m-1" size="10" name="old_password"></td>
                                </tr>
                                <tr>
                                    <td>Enter your new password:</td>
                                    <td><input type="password" class="form-control border border-danger border-2 m-1" size="10" name="new_password"></td>
                                </tr>
                                <tr>
                                    <td>Re-enter your new password:</td>
                                    <td><input type="password" class="form-control border border-danger border-2 m-1" size="10" name="con_password"></td>
                                </tr>
                            </table>
                            <p><input class="btn btn-outline-success" type="submit" name="updatePass" value="Update Password">
                        </form>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>