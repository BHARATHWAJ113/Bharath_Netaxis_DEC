<?php
session_start();
include('session.php');




?>

<html>

<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Welcome </title>
</head>
<style>
   .imgs {
      height: 110px;
      width: 150px;
   }

   /* Chrome, Safari, Edge, Opera */
   input::-webkit-outer-spin-button,
   input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
   }

   /* Firefox */
   input[type=number] {
      appearance: textfield;
   }
</style>

<body>

   <!-- NAV BAR DECLARE -->

   <?php
   include('nav.php');
   include('changePass.php');

   ?>

   <!-- Button trigger modal -->
   <div class="container-fluid m-1 ">
      <h1 class="display-3 text-success">
         <b>R</b>C-<b>S</b>election-<b>L</b>ist :-
         <hr>
      </h1>
      <div class="row">
         <?php
         extract($_POST);

         $sql = "SELECT * FROM rp_data";
         $result = $db->query($sql);

         while ($row = mysqli_fetch_array($result)) {
            echo "   <div class='card m-3' style='max-width: 540px;'>";
            echo "<div class='row'>";
            echo "   <div class='col-md-4'>";
            echo "   <img src='./assets/img/img_bg/card_image.jpg' class='img-fluid h-100 ps-0 rounded-start'>";
            echo "   </div>";
            echo "   <div class='col-md-8'>";
            echo "   <div class='card-body'>";
            echo "   <h5 class='card-title'>Name:<span>" . $row['rp_name'] . "</span></h5><br>";
            echo "   <h5 class='card-title'>Audio:</h5>";
            echo "   <audio controls><source src=" . $row['rp_audio'] . "></audio><br>";
            echo "   <h5 class='card-title'>Video:</h5>";
            echo "   <video width='300' height='150' controls='controls' poster='image' preload='metadata'><source src=" . $row['rp_video'] . "></video>";
            echo "   <p class='card-text'><small class='text-muted'></small></p>";
            echo "   <h5 class='card-title'>Old Mark:<span class='text-success'>" . $row['rp_mark'] . "</span></h5>";
            echo "   <form method='post'>
                     <div class='form-floating mb-3'>
                     <input type='number' class='form-control' id='floatingInput' name='new_mark' placeholder='1-100'>
                     <label for='floatingInput'>New Mark</label>
                     <label></label>
                     <label></label>
                     <p for='inputState' class='form-label'>Status</p>
                           <select id='inputState' class='form-select' name='new_status'>
                              <option value='0'>Choose...</option>
                              <option value='S'>Selected</option>
                              <option value='R'>Rejected</option>
                              <option value='W'>Waiting List</option>
                           </select>
                     <a class='btn btn-outline-danger m-1 p-1 ' href='./home.php?id=" . $row['id'] . "' >DELETE</a>
                     <!-----<a class='btn btn-outline-success m-1 p-1' href='./home.php?rp_email=" . $row['rp_email'] . "' >EDIT</a>----!>

                     <input class='btn btn-outline-success m-1 p-1 ' type='submit' name='save' value='SAVE'>
                     <p>Note: First enter the mark and enter the status then click <i><b>SAVE</b></i></p>
                     </form>
                     </div>";
            echo "   </div>";
            echo "   </div>";
            echo "   </div>";
            echo "   </div>";
         }
         // echo   "</div>";
         // echo   "</div>";


         if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "DELETE FROM rp_data WHERE id = $id";

            if ($db->query($sql) === TRUE) {

               echo "Success";
               
            } else {
               echo "Error deleting record";
              
            }
         }



         if (isset($_POST['save']) != "") {


            extract($_POST);
            $sql = "SELECT * FROM rp_data";
            $result = $db->query($sql);
            $row = mysqli_fetch_array($result);
            $update = "UPDATE rp_data SET rp_mark = $new_mark, rp_status = '$new_status' WHERE id= 1 ";
            $result_up = $db->query($update);



            if ($result_up) {

               echo '<script>alert("Successfully Updated!!");</script>';
               exit;
            } else {
               echo '<script>alert("Something went wrong, Try again!");</script>';

               exit;
            }
         }



         ?>
      </div>


   </div>




   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>