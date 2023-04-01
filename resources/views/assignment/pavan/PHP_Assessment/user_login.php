<!-- LOGIN -->
<?php
ob_start();


include("./db_conn.php");
include("./session.php");
    // echo "data";
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
    

    if(isset($_POST['submit'])) {
        
        $decrypt = md5($password);
    
        $sql = "SELECT * FROM  oed_users WHERE username = '$username' and password = '$decrypt' and is_admin = '0'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($username && $password != "") {  
        // USER LOGIN
            if (mysqli_num_rows($result) > 0) {
                
                    $error = '<div class="alert alert-success" role="alert"><b>' .$username. ' LOGGED-IN SUCCESSFULLY<b></div>';
                    $_SESSION['$user_id'] = $row['id'];
                    $_SESSION['$user'] = $row['username'];
                
                if ($user_id) {
                    echo "<script>location = 'index.php'</script>";
                    // ob_end_flush();
                }
            }
           else{
                $sql1 = "SELECT * FROM oed_users WHERE username = '$username' AND password = '$decrypt' and is_admin = '1'";
                $result1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_assoc($result1);
            if(mysqli_num_rows($result1) > 0) {
                echo "<script>location = 'admin_page.php'</script>";
                ob_end_flush();
                    $error = '<div class="alert alert-success" role="alert"><b> Admin ' .$username. ' LOGGED-IN SUCCESSFULLY<b></div>';
                    $_SESSION['$is_admin'] = $row1['id'];
                
            }else {
                $error = '<div class="alert alert-danger" role="alert"><b> Invalid UserName or Password<b></div>';
            }
            }
        // ADMIN LOGIN
            
        }else{
            $error = '<div class="alert alert-danger" role="alert"><b>Enter The Required Credentials<b></div>';
        }
    }

    

// mysqli_close($conn);
?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style/login.css">
    <link rel="icon" href="./img/2.ico" />
</head>

<body style="background-color: #171717;">
    <div class="card" style="width: 23rem; margin: 0 auto; margin-top: 10%;">
        <div class="card2">
            <form class="form" method="post">
                <p id="heading">Login</p>
                <div class="field">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16"
                        xmlns="http://www.w3.org/2000/svg" class="input-icon">
                        <path
                            d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z">
                        </path>
                    </svg>
                    <input type="text" class="input-field" name="username" placeholder="Username" autocomplete="off">
                </div>
                <div class="field">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16"
                        xmlns="http://www.w3.org/2000/svg" class="input-icon">
                        <path
                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
                        </path>
                    </svg>
                    <input type="password" name="password" class="input-field" placeholder="Password">
                </div>
                <div class="btn">
                    <button class="button1"
                        name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                </div>
                <div style="width: 18rem; margin: 0 auto; margin-top: 1%;">
                    <?php  echo $error;  ?>
                </div>
            </form>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</body>

</html>