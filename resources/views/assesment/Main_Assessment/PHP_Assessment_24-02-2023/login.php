<?php
ob_start();
include("config.php");
include("session.php");

$login_path = explode("/", basename($_SERVER['REQUEST_URI']))[0];
// echo $login_path;
$_SESSION['$register_path'] = $login_path;
// echo $entry_path_wb;
//     echo $login_path;

if (isset($_POST["l_send"])) {
    $l_email = mysqli_real_escape_string($db, $_POST['l_email']);
    $l_pass = mysqli_real_escape_string($db, $_POST['l_pass']);
    $sql = "SELECT * FROM wb_users WHERE email = '$l_email'";
    $result = $db->query($sql);
    $row = mysqli_fetch_array($result);
    $is_admin = $row['is_admin'] ?? " " ; 
    // echo $is_admin;
    if ($is_admin == 'A') {

        $sql = "SELECT * FROM wb_users WHERE email = '$l_email'";
        $result = $db->query($sql);
        $row = mysqli_fetch_array($result);
        $email = $row['email'];
        $hash = $row['password'];
        $verify = md5($l_pass);


        if (($email == $l_email) && ($verify == $hash)) {
            // header("Refresh: 0; url=adminHome.php");
            header('Location: ./adminHome.php');
        } else {
            echo "<p class='alert'>Your Login Name or Password is invalid</p>";
        }
    } else {

        $sql = "SELECT * FROM wb_users WHERE email = '$l_email'";
        $result = $db->query($sql);
        // $count = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        $email = $row['email'] ?? ' ';
        $loginuser = $row['username'] ?? ' ';

        $hash = $row['password'] ?? ' ';
        $verify = md5($l_pass);
        // echo"$hash";
        // echo"$l_pass";
        // echo"$verify";
        if (($email == $l_email) && ($verify == $hash)) {
            $_SESSION['$user_login'] = $row['username'];

            header("Location: index.php");
        } else {
            echo "<p class='alert'>Your Login Name or Password is invalid</p>";
        }
    }
};







if (isset($_POST["s_send"])) {

    //  Inserting the data to table

    extract($_POST);

    $sql = "SELECT * FROM wb_users WHERE username ='$s_name' AND `email` ='$s_email'";
    $checkrows = $db->query($sql);
    $hashedPassword = md5($s_pass);

    if ($checkrows->num_rows > 0) {
        echo "<p class='alert'>The Data is already exists</p>";
    } elseif ($s_pass != $s_cpass) {
        echo "<p class='alert'>Passwords doesn't match</p>";
    } else {
        $query = "INSERT INTO wb_users (`username`,email,`password`,e_path,r_path,u_time) VALUES('$s_name', '$s_email','$hashedPassword','$entry_path_wb','$login_path',now())";
        echo "<p class='alert-success'>The data is inserted sucessfully</p>";
        $result = $db->query($query);
    }
};



?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
						initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="./assets/css/lsstyle.css">

</head>

<body>
    <header>
        <h1 class="heading">User Login</h1>
    </header>

    <!-- container div -->
    <div class="container" style="border-radius:25px">

        <!-- upper button section to select
			the login or signup form -->
        <div class="slider"></div>
        <div class="btn">
            <button class="login">Login</button>
            <button class="signup">Signup</button>
        </div>

        <!-- Form section that contains the
			login and the signup form -->
        <div class="form-section">

            <!-- login form -->
            <form method="post">
                <div class="login-box">
                    <input type="email" class="email ele" name="l_email" placeholder="youremail@email.com" required>
                    <input type="password" class="password ele" name="l_pass" placeholder="password" required>
                    <button class="clkbtn" name="l_send">Login</button>
                </div>
            </form>

            <!-- signup form -->
            <form method="post">
                <div class="signup-box">
                    <input type="text" class="name ele" name="s_name" placeholder="Enter your name">
                    <input type="email" class="email ele" name="s_email" placeholder="youremail@email.com">
                    <input type="password" class="password ele" name="s_pass" placeholder="password">
                    <input type="password" class="password ele" name="s_cpass" placeholder="Confirm password">
                    <button class="clkbtn" name="s_send">Signup</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        let signup = document.querySelector(".signup");
        let login = document.querySelector(".login");
        let slider = document.querySelector(".slider");
        let formSection = document.querySelector(".form-section");

        signup.addEventListener("click", () => {
            slider.classList.add("moveslider");
            formSection.classList.add("form-section-move");
        });

        login.addEventListener("click", () => {
            slider.classList.remove("moveslider");
            formSection.classList.remove("form-section-move");
        });
    </script>
</body>

</html>