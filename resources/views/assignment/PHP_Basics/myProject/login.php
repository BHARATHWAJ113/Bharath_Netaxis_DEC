<?php

include("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 

   $myusername = mysqli_real_escape_string($db, $_POST['username']);
   $mypassword = mysqli_real_escape_string($db, $_POST['password']);

   $sql = mysqli_query($db, "(SELECT * FROM admin WHERE username = '$myusername' and passcode = '$mypassword')");
   //   $result = mysqli_query($db,$sql);
   //   $row = mysqli_fetch_array($result);
   //   $active = $row['active'];

   //   $count = mysqli_num_rows($result);
   $count = mysqli_num_rows($sql);



   if ($count > 0) {
      $_SESSION['$myusername'] = mysqli_real_escape_string($db, $_POST['username']);
      //  session_register("myusername");
      $_SESSION['login_user'] = $myusername;

      header("location: home.php");
   } else {
      $error = "Your Login Name or Password is invalid";
      $page = $_SERVER['PHP_SELF'];
      header("Refresh: 2; url=$page");
   }
}
?>
<html>

<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <title>Project-FSD</title>

   <style type="text/css">
      body {
         font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
         font-size: 14px;
      }

      .style {
         font-weight: bold;
         font-size: 24px;
      }

      label {
         font-size: 14px;
         font-weight: bold;
         margin: 5px;
      }

      .zoom {
         border-radius: 4px;
         /* background-color: green; */
         border: none;
         color: #FFFFFF;
         text-align: center;
         font-size: 28px;
         /* padding: 20px; */
         width: 150px;
         transition: all 0.9s;
         cursor: pointer;
         margin: 5px;
      }

      .zoom span {
         cursor: pointer;
         display: inline-block;
         position: relative;
         transition: 0.9s;
      }

      .zoom span:after {
         content: '\00bb';
         position: absolute;
         opacity: 0;
         top: 0;
         right: -20px;
         transition: 0.9s;
      }

      .zoom:hover span {
         padding-right: 25px;
      }

      .zoom:hover span:after {
         opacity: 1;
         right: 0;
      }
   </style>

</head>

<body bgcolor="#FFFFFF">

   <div align="center">
      <div class="border border-success border-3 rounded" style="width:400px; margin-top:10%;" align="left">
         <div class="bg-secondary text-white p-3 text-center style"><b>ADMIN LOGIN</b></div>
         <div style="margin:30px">
            <form action="" method="post">
               <label>UserName :</label><input type="text" name="username" class="form-control border border-danger border-2" required /><br /><br />
               <label>Password :</label><input type="password" name="password" class="form-control border border-danger border-2" required /><br /><br />
               <div align='center'>
                  <button class="btn btn-success zoom" type="submit" /> <span>Submit</span></button><br />
               </div>
            </form>

            <div>
               <p class="alert alert-danger"><?php echo $error ?? 'Note: Unauthorized is illegal as per Section 43 of the IT Act' ?></p>
            </div>

         </div>

      </div>

   </div>

</body>

</html>