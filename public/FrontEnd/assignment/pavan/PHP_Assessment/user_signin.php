<!-- ***************************************** SIGN-UP ************************************************* -->

<?php
ob_start();

include("./session.php");

include("./db_conn.php");

$register = explode("/", basename($_SERVER['REQUEST_URI']))[0];
$_SESSION['$registerpath'] = $register;

$entrypath = $_SESSION['$entrypath'];
$registerpath = $_SESSION['$registerpath'];

// INSERT VALUES
$error = "";

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // ENCRIPT
    $encrypt = md5($password);

$sql = "INSERT INTO oed_users (username,email, `password`,entrypath, registerpath, is_admin ) VALUES ('$username', '$email', '$encrypt','$entrypath', '$registerpath', 0)";

    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {  
            $error = '<div class="alert alert-danger" role="alert"><b>Only alphabets and white space are allowed in Username<b></div>';  
    }else{
        if($username && $email && $password != ""){
            if($conn->query($sql) === TRUE){
                $error = '<div class="alert alert-success" role="alert"><b>' .$username. ' VALUE INSERTED SUCCESSFULL<b></div>';
                header('Location: ./user_login.php');
            }else{
                $error = '<div class="alert alert-danger" role="alert"><b>Email ID taken try something else<b></div>';
            }
        }else{
            $error = '<div class="alert alert-danger" role="alert"><b>Enter The Required Credentials <b></div>';
        }
    }
}

    // $conn->close();
?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style/register.css">
    <link rel="icon" href="./img/2.ico" />
</head>
<body style="background-color: #171717;">
    <div class="card" style="width: 23rem; margin: 0 auto; margin-top: 9%;">
        <div class="card2">
            <form class="form" method="post">
                <p id="heading">Register</p>
                <div class="field">
                <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="input-icon">
                <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"></path>
                </svg>
                    <input type="text" class="input-field" name="username" placeholder="Username" autocomplete="off">
                </div>
                <div class="field">
                <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="input-icon">
                <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"></path>
                </svg>
                    <input type="email" class="input-field" name="email" placeholder="Email" autocomplete="off">
                </div>
                <div class="field">
                <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="input-icon">
                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                </svg>
                    <input type="password" name="password" class="input-field" placeholder="Password">
                </div>
                <div class="btn">
                <button class="button1" onclick="aa()" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                </div>
                <div style="width: 18rem; margin: 0 auto; margin-top: 1%;"><?php  echo $error;  ?></div>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</body>
</html>

<script type="text/javascript">
function aa()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "insert.php?name=" + document.getElementById("t1").value + "&city=" + document.getElementById("t2").value, false);
    xmlhttp.send(null);

    document.getElementById("d1").innerHTML=xmlhttp.responseText;;
}
</script>
