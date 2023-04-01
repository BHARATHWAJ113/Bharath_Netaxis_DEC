<?php 
ob_start();

include("./session.php");
include("./db_conn.php");

//  Disable btn
if (isset($_SESSION['$user_id']) || isset($_SESSION['$is_admin'])) {
    $disabled = '';
  } else {
    $disabled = 'disabled';
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style/header.css">
  <link rel="icon" href="./img/2.ico" />
</head>
<body style="background-color: #f0f4fa;">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="bi bi-book-half"></i> Oxford English Dictionary</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="./index.php" style="color: yellow;">Home</a>
          </li>
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item" id="logout_hide">
            <form action="" method="post">
              <?php 
              // echo $login_session; 
              ?>
              <?php if($login_session != 'Guest'){
                echo '<a class="btn btn-danger" href="logout.php" style="margin-right: 3px; margin: 4px;">Logout</a>';
              }
               ?>
            </form>
          </li>
          <?php if($login_session == 'Guest'){
            echo '<li class="nav-item">
            <a class="nav-link" href="user_signin.php"><i class="bi bi-person-plus-fill"></i> register</a>
           </li>';
          }
             ?>
          <?php if($login_session == 'Guest'){
            echo '<li class="nav-item">
            <a class="nav-link" href="user_login.php"><i class="bi bi-box-arrow-right"></i> Login</a>
          </li>';
          }
             ?>
        </ul>
      </div>
    </div>
  </nav> 


<div class="container-fluid">
    <div class="row">
    
        <div class="col-md-4" style="margin: 0 auto; margin-top: 2%; margin-bottom: 2%;">
            <!-- Search Words -->
            <div style="width: 18rem;  margin: 0 auto; margin-top: 2%;">
        <!-- ---------->
            
                <h4>Synonym: <span style="color: blue";>
                <?php
                    $sql5 = "SELECT * FROM oed_words 
                            INNER JOIN oed_words_data ON oed_words.id = oed_words_data.word_id WHERE is_synonym = 1 and oed_words.is_approved = 1";
                    $result5 = $conn->query($sql5);
                    if($result5 == true){
                        
                        while($row = mysqli_fetch_array($result5)){
                            echo "<a href='index.php?search_term=". $row['word'] ."&search='>". $row['word'] .", </a>";
                        }
                    }
                ?>
                    </span></h4>
                    <a href="synonym.php" style="text-decoration: none;" <?php echo $disabled; ?>><button id="add1" type="button" class="cssbuttons-io-button" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg>
                    <span>Add</span>
                    </button></a>
                    
                <br>
                    <h4>Antonym: <span style="color: blue";>
                    <?php
                        $sql6 = "SELECT * FROM oed_words 
                                INNER JOIN oed_words_data ON oed_words.id = oed_words_data.word_id WHERE is_antonym = 1 and oed_words.is_approved = 1";
                        $result6 = $conn->query($sql6);
                        if($result6 == true){
                            
                            while($row = mysqli_fetch_array($result6)){
                                echo "<a href='index.php?search_term=". $row['word'] ."&search='>". $row['word'] .", </a>";
                            }
                        }

                    ?>
                    </span></h4>
                    <a href="antonym.php" style="text-decoration: none;" <?php echo $disabled; ?>><button id="add2" type="button" class="cssbuttons-io-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg>
                    <span>Add</span>
                    </button></a>
                    
                <hr>
          
        <!-- ---------->
                <div>
                    <form method='GET'>
                        <div class='form-group'>
                        <label><h5>Comment</h5></label>
                        <textarea class='form-control' rows='5' name='comment' style='background-color: black; color: white;'></textarea>
                        </div>
                        <br>
                        <button type="submit" style='margin-left: 80%; color: black;' name="co_btn"  class='btn btn-success'>Post</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- display -->
        <div class="col-md-4">
        <h3 style='color: #8816b5; margin-top: 8%; margin-left: 15px;'><b>Comments: </b></h3>
        <hr style="width: 250px; margin-left: 3%;">
            <?php
            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                if(isset($_GET['comment']) && isset($_SESSION['$user_id'])){
                    $comments = $_GET['comment'];
                    $user_id = $_SESSION['$user_id'];
                }
                    
                    $is_approved = 0;
                    $word_id = $_SESSION['$display_word_id'];
                    $date = date('y-m-d H:i:s');

                    if(isset($_GET['co_btn'])){
                        if(empty($comments)){
                            echo "<div class='alert alert-danger' style='width: 18rem; margin-left: 3%; margin-top: 1%;'><b>The comment is empty</b></div>";
                        }else{
                        $sql4 = "INSERT INTO oed_comments(comments, user_id, is_approved, word_id, `updated_time`) VALUES ('$comments', $user_id, $is_approved , $word_id, '$date')";
                        if ($conn->query($sql4) === TRUE) {
                            echo "<div class='alert alert-success' style='width: 18rem; margin-left: 15px; margin-top: 1%;'><b>Added Successfully ... <br>Please wait until admin approve the comment</b></div>";
                        }else{
                            echo "<div class='alert alert-danger' style='width: 18rem; margin-left: 2%; margin-top: 1%;'><b>kindly logged in</b></div>";
                        }
                    }
                    }
                } 
            // DISPLAYING COMMENTS
            if(isset($word_id)){
            $sql = "SELECT * FROM oed_comments
            left JOIN oed_users ON oed_users.id = oed_comments.user_id WHERE word_id = $word_id and is_approved = 1";

            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {

                    echo 
                    "
                        <div class='card m-3' id='display_word'>
                            <h6 style='margin: 2%;'>" ."<b style='color: blue;'> " . $row['username'] ."</b> " ." ". "<span style='color: #99a39c;'> @" . $row['username'] . " .  " . $row['updated_time'] . "</span></h6>
                            <p style='margin: 3%;'>" . $row['comments'] . "<br></p>
                        </div>
                    ";
                }
            } else {
                return false;
            }
         };
            ?>
        </div>
       
        
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</body>
</html>
