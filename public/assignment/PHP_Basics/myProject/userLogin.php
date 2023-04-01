<?php

include("config.php");
session_start();

if (isset($_POST["l_send"])) {

    $la_email = mysqli_real_escape_string($db, $_POST['la_email']);
    $la_pass = mysqli_real_escape_string($db, $_POST['la_pass']);

    $sql = mysqli_query($db, "(SELECT * FROM user_login WHERE a_email = '$la_email' and a_password = '$la_pass')");
    $count = mysqli_num_rows($sql);



    if ($count > 0) {
        $_SESSION['$la_email'] = mysqli_real_escape_string($db, $_POST['la_email']);
        $_SESSION['login_user'] = $la_email;

        header("location: userHome.php");
    } else {
        echo "<p class='alert'>Your Login Name or Password is invalid</p>";
        $page = $_SERVER['PHP_SELF'];
        header("Refresh: 2; url=$page");
    }
};








if (isset($_POST["s_send"])) {

    //  Inserting the data to table

    extract($_POST);

    $sql = "SELECT * FROM user_login WHERE a_name='$sa_name' AND a_email='$sa_email'";
    $checkrows = $db->query($sql);

    
        if ($checkrows->num_rows > 0) {
            echo "<p class='alert'>The Data is already exists</p>";
        } elseif ($sa_pass != $sa_cpass) {
            echo "<p class='alert'>Passwords doesn't match</p>";
        } else {
            $query = "INSERT INTO user_login (a_name,a_email,a_password,a_cpassword) VALUES('$sa_name', '$sa_email','$sa_pass','$sa_cpass')";
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
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
    <header>
        <h1 class="heading">User Login</h1>
    </header>

    <!-- container div -->
    <div class="container">

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
                    <input type="email" class="email ele" name="la_email" placeholder="youremail@email.com" required>
                    <input type="password" class="password ele" name="la_pass" placeholder="password" required>
                    <button class="clkbtn" name="l_send">Login</button>
                </div>
            </form>

            <!-- signup form -->
            <form method="post">
                <div class="signup-box">
                    <input type="text" class="name ele" name="sa_name" placeholder="Enter your name">
                    <input type="email" class="email ele" name="sa_email" placeholder="youremail@email.com">
                    <input type="password" class="password ele" name="sa_pass" placeholder="password">
                    <input type="password" class="password ele" name="sa_cpass" placeholder="Confirm password">
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