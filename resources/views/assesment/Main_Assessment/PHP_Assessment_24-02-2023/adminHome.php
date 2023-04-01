<?php
ob_start();
include("config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="assets/css/adminstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/1716af8fd8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<style>

</style>


<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu dark' id="header-toggle"></i> </div>
        <div>
            <h3><b>Welcome <span class="text-danger">Boss!!!</span></b></h3>
        </div>
        <div class="header_img"> <img src="mypic.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class="fa-solid fa-user-secret text-warning"></i> <span class="nav_logo-name">Admin</span> </a>
                <div class="nav_list">
                    <a href="#task1" class="nav_link active" style="text-decoration: none;"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="#task2" class="nav_link" style="text-decoration: none;"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a>
                    <a href="#task3" class="nav_link" style="text-decoration: none;"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Comments</span></a>
                    <a href="#task4" class="nav_link" style="text-decoration: none;"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Words</span> </a>
                    <a href="#task5" class="nav_link" style="text-decoration: none;"> <i class="fa-brands fa-stripe-s  nav_icon"></i> <span class="nav_name">Synonyms</span> </a>
                    <a href="#task6" class="nav_link" style="text-decoration: none;"> <i class="fa-solid fa-font  nav_icon"></i> <span class="nav_name">Antonyms</span> </a>
                </div>
            </div>
            <a href="adminlogout.php" class="nav_link" style="text-decoration: none;"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>

    </div>


    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

    <!--Container Main start-->
    <div id="task1" class="bg-light">
        <div class="row"><br>
            <div class="col-lg-12">
                <h1></h1>
            </div><br>
            <div class="col-lg-4 p-3"><br>
                <h1><b>Dashboard :-</b></h1>
            </div>
            <div class="col-lg-6">
                <h1></h1>
            </div>

            <div class="row"><br>
                <h1></h1>
                <div class="col-sm-4 text-center">
                    <h1><i class="fa-solid fa-1x fa-users"> </i><span class="text-primary p-2"><b>USER'S</b></span><br><b class="text-primary">
                            <?php
                            $sqlcount = "select count(username) from wb_users";
                            $resultt = $db->query($sqlcount);
                            $row = mysqli_fetch_array($resultt);
                            echo $row[0];
                            ?>
                        </b></h1>
                </div>
                <div class="col-sm-4 text-center">
                    <h1><i class="fa-brands fa-1x fa-wordpress-simple"></i><span class="text-danger p-2"><b>Word'S</b></span><br><b class="text-primary">
                            <?php
                            $sqlcount = "select count(word) from wb_words";
                            $resultt = $db->query($sqlcount);
                            $row = mysqli_fetch_array($resultt);
                            echo $row[0];
                            ?>
                        </b></h1>
                </div>
                <div class="col-sm-4 text-center">
                    <h1><i class="fa-solid fa-1x fa-comments"></i><span class=" text-success p-2"><b>Comments</b></span><br><b class=" text-primary">
                            <?php
                            $sqlcount = "select count(comments) from wb_comments";
                            $resultt = $db->query($sqlcount);
                            $row = mysqli_fetch_array($resultt);
                            echo $row[0];
                            ?>
                        </b></h1>
                </div>

            </div>
        </div>
    </div>


    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

    <div id="task2" class="bg-light"><br>
        <div class="row"><br>
            <div class="col-lg-12">
                <h1></h1>
            </div><br>
            <div class="col-lg-4  p-3"><br>
                <h1><b>USERS LIST :-</b></h1>
            </div>
            <div class="col-lg-6">
                <h1></h1>
            </div>

            <!-- User's table listing here -->

            <?php

            $sql = "SELECT * FROM wb_users";
            $result = $db->query($sql);

            while ($row = mysqli_fetch_array($result)) {

                echo "<div class='col-sm-6 col-lg-3 p-3'>
                            <div id='' class='card text-center " . $row['is_admin'] . " text-white'>
                                <div class='card-header'>
                                    User No: <span > " . $row['id'] . "</span>
                                </div>
                                <div class='card-body'>
                                    <h5 class='card-title'>Name:<span>" . $row['username'] . "</span></h5>
                                    <h5 class='card-title'>Email:<span> " . $row['email'] . "</span></h5>
                                    <a href='' class='btn btn-danger disabled'>Soon it will work</a>
                                </div>
                                <div class='card-footer'>
                                    Date of jonning <span>" . $row['u_time'] . "</span>
                                </div>
                                
                            </div>
                        </div>";
            };
            ?>

        </div>



    </div>


    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->



    <div id="task3" class=" bg-light">
        <div class="row"><br>
            <div class="col-lg-12">
                <h1></h1>
            </div><br>
            <div class="col-lg-4 p-3"><br>
                <h1><b>Comments :-</b></h1>
            </div>
            <div class="col-lg-6">
                <h1></h1>
            </div>
            <?php
            echo "<div class='comments'>
                                    <div class='row'>";
            $c_sql = "select wb_comments.id as id,comments,username,c_time,is_aprove from wb_comments inner join wb_users on wb_comments.user_id = wb_users.id";
            $c_result = $db->query($c_sql);
            // $c_row = mysqli_fetch_array($c_result);
            while ($c_row = mysqli_fetch_array($c_result)) {
                echo "
                                        
                                        <div class='col-sm-6 col-lg-3 p-3'>
                                        <div class='card m-2' style='max-width:300px';>
                                        <div class='card-header'><h5>Comments </h5>
                                        
                                    </div>
                                    <div class='card-body'>
                                    <blockquote class='blockquote mb-0'>
                                    <p>" . $c_row['comments'] . "</p>
                                    <footer class='blockquote-footer'>" . $c_row['username'] . " <span> is commented at </span><cite title='Source Title'>" . $c_row['c_time'] . "</cite></footer>
                                    </blockquote>
                                    </div>
                                    <div class='card-footer'>";
                if (($c_row['is_aprove'] == TRUE)) {
                    echo "<a name='is_disapp_comt' href='cmt_disapp.php?id=$c_row[id]' class='btn btn-danger'>Disapprove</a>";
                    echo "<a name='is_disapp_comt' href='cmt_delete.php?id=$c_row[id]'  class='bg-light p-1 ms-5' style='border-radius:25px;'><i class='fa-regular fa-trash-can text-danger'></i></a>";
                } else {

                    echo "<a name='is_app_comt' href='cmt_app.php?id=$c_row[id]' class='btn btn-success'>Approve</a>";
                    echo "<a name='is_disapp_comt' href='cmt_delete.php?id=$c_row[id]'  class='bg-light p-1 ms-5' style='border-radius:25px;'><i class='fa-regular fa-trash-can text-danger'></i></a>";
                }

                echo "</div>
                                    
                                    </div>
                                    </div>
                                    ";
            }

            echo "</div>
                                </div>";

            ?>
        </div>
    </div>


    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->


    <div id="task4" class="bg-light">
        <div class="row"><br>
            <div class="col-lg-12">
                <h1></h1>
            </div><br>
            <div class="col-lg-4  p-3"><br>
                <h1><b>Words :-</b></h1>
            </div>
            <div class="col-lg-6">
                <h1></h1>
            </div>

            <?php
            echo "<div class='words'>
                                    <div class='row'>";
            $c_sql = "select wb_words.id as id,word,username,w_time,is_approve,image from wb_words inner join wb_users on wb_words.user_id = wb_users.id";
            $c_result = $db->query($c_sql);
            // $c_row = mysqli_fetch_array($c_result);
            while ($c_row = mysqli_fetch_array($c_result)) {
                echo "
                                        
                                        <div class='col-sm-6 col-lg-3 p-3'>
                                        <div class='card m-2 NAA' style='max-width:300px';>
                                        <div class='card-header h5'>WORDS
                                    </div>
                                    <div class='card-body'>
                                    <blockquote class='blockquote mb-0'>
                                    <p class='text-primary h3'>" . $c_row['word'] . "</p>
                                    <img src='" . $c_row['image'] . "' class='img-thumbnail mb-4' style='height:150px; width:200px;' alt='Sample Image'><br>
                                    <footer class='blockquote-footer text-danger'>" . $c_row['username'] . "<span> is added a word on </span><cite title='Source Title'>" . $c_row['w_time'] . "</cite></footer>
                                    </blockquote>
                                    </div>
                                    <div class='card-footer'>";
                if (($c_row['is_approve'] == TRUE)) {
                    echo "<a name='is_disapp_comt' href='word_disapp.php?id=$c_row[id]' class='btn btn-danger'>Disapprove</a>";
                    echo "<a name='is_disapp_comt' href='word_delete.php?id=$c_row[id]'  class='bg-light p-1 ms-5' style='border-radius:25px;'><i class='fa-regular fa-trash-can text-danger'></i></a>";
                } else {

                    echo "<a name='is_app_comt' href='word_app.php?id=$c_row[id]' class='btn btn-success'>Approve</a>";
                    echo "<a name='is_disapp_comt' href='word_delete.php?id=$c_row[id]' class='bg-light p-1 ms-5' style='border-radius:25px;'><i class='fa-regular fa-trash-can text-danger'></i></a>";
                }

                echo "
                                    
                                    
                                    </div> 
                                    
                                    </div>
                                    </div>
                                    ";
            }

            echo "</div>
                                </div>";

            ?>


        </div>
    </div>


    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

    <div id="task5" class="bg-light">
        <div class="row"><br>
            <div class="col-lg-12">
                <h1></h1>
            </div><br>
            <div class="col-lg-4  p-3"><br>
                <h1><b>Synonyms :-</b></h1>
            </div>
            <div class="col-lg-6">
                <h1></h1>
            </div>

            <?php
            echo "<div class='words'>
            <div class='row'>";
            $s_sql = "select wb_words_data.id as id,word,is_aprove_a_s,image,parent_id from wb_words inner join wb_words_data on wb_words.id = wb_words_data.word_id WHERE is_synonym=1";
            $s_result = $db->query($s_sql);
            while ($s_row = mysqli_fetch_array($s_result)) {
                $pid=$s_row['parent_id'];
                $p_sql ="select word from wb_words where id=$pid";
                $p_result = $db->query($p_sql);
                $p_row = mysqli_fetch_array($p_result);
                echo "
                                        
                                        <div class='col-sm-6 col-lg-3 p-3'>
                                        <div class='card m-2 NAA' style='max-width:300px';>
                                        <div class='card-header h5'>Synonyms :-
                                    </div>
                                    <div class='card-body'>
                                    <blockquote class='blockquote mb-0'>
                                    <p class='text-primary h3'><span class='text-danger'>" . $s_row['word'] . "</p>
                                    <img src='" . $s_row['image'] . "' class='img-thumbnail mb-4' style='height:150px; width:200px;' alt='Sample Image'><br>
                                    <footer class='blockquote-footer text-danger'>Whether  " . $s_row['word'] . "  <span> is synonym for <span class='text-success'>" . $p_row['word'] . "</span> </span><br><cite title='Source Title'>(Approve or Disapprove it)</cite></footer>
                                    </blockquote>
                                    </div>
                                    <div class='card-footer'>";
                if (($s_row['is_aprove_a_s'] == TRUE)) {
                    echo "<a name='is_disapp_comt' href='syn_disapp.php?id=$s_row[id]' class='btn btn-danger'>Disapprove</a>";
                    // echo "<a name='is_disapp_comt' href='sn_delete.php?id=$s_row[id]'  class='bg-light p-1 ms-5'  style='border-radius:25px;'><i class='fa-regular fa-trash-can text-danger'></i></a>";
                } else {

                    echo "<a name='is_app_comt' href='syn_app.php?id=$s_row[id]' class='btn btn-success'>Approve</a>";
                    // echo "<a name='is_disapp_comt' href='sn_delete.php?id=$s_row[id]' class='bg-light p-1 ms-5' style='border-radius:25px;'><i class='fa-regular fa-trash-can text-danger'></i></a>";
                }

                echo "
                                    
                                    
                                    </div> 
                                    
                                    </div>
                                    </div>
                                    ";
            }

            echo "</div>
            </div>";
            ?>


        </div>
    </div>


    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

    <div id="task6" class="bg-light">
        <div class="row"><br>
            <div class="col-lg-12">
                <h1></h1>
            </div><br>
            <div class="col-lg-4  p-3"><br>
                <h1><b>Antonyms :-</b></h1>
            </div>
            <div class="col-lg-6">
                <h1></h1>
            </div>

            <?php
     echo "<div class='words'>
     <div class='row'>";
     $s_sql = "select wb_words_data.id as id,word,is_aprove_a_s,image,parent_id  from wb_words inner join wb_words_data on wb_words.id = wb_words_data.word_id WHERE is_antonym=1";
     $s_result = $db->query($s_sql);
     while ($s_row = mysqli_fetch_array($s_result)) {
                $pid=$s_row['parent_id'];
                $p_sql ="select word from wb_words where id=$pid";
                $p_result = $db->query($p_sql);
                $p_row = mysqli_fetch_array($p_result);
         echo "
                                 
                                 <div class='col-sm-6 col-lg-3 p-3'>
                                 <div class='card m-2 NAA' style='max-width:300px';>
                                 <div class='card-header h5'>Antonyms :-
                             </div>
                             <div class='card-body'>
                             <blockquote class='blockquote mb-0'>
                             <p class='text-primary h3'><span class='text-danger'>" . $s_row['word'] . "</span></p>
                             <img src='" . $s_row['image'] . "' class='img-thumbnail mb-4' style='height:150px; width:200px;' alt='Sample Image'><br>
                             <footer class='blockquote-footer text-danger'>Whether  " . $s_row['word'] . "  <span> is antonym for <span class='text-success'>" . $p_row['word'] . "</span> </span><br><cite title='Source Title'>(Approve or Disapprove it)</cite></footer>
                             </blockquote>
                             </div>
                             <div class='card-footer'>";
         if (($s_row['is_aprove_a_s'] == TRUE)) {
             echo "<a name='is_disapp_comt' href='syn_disapp.php?id=$s_row[id]' class='btn btn-danger'>Disapprove</a>";
             // echo "<a name='is_disapp_comt' href='sn_delete.php?id=$s_row[id]'  class='bg-light p-1 ms-5'  style='border-radius:25px;'><i class='fa-regular fa-trash-can text-danger'></i></a>";
         } else {

             echo "<a name='is_app_comt' href='syn_app.php?id=$s_row[id]' class='btn btn-success'>Approve</a>";
             // echo "<a name='is_disapp_comt' href='sn_delete.php?id=$s_row[id]' class='bg-light p-1 ms-5' style='border-radius:25px;'><i class='fa-regular fa-trash-can text-danger'></i></a>";
         }

         echo "
                             
                             
                             </div> 
                             
                             </div>
                             </div>
                             ";
     }

     echo "</div>
     </div>";

            ?>


        </div>
    </div>


    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

    <!--Container Main end-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // show navbar
                        nav.classList.toggle('show')
                        // change icon
                        toggle.classList.toggle('bx-x')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
        });
    </script>
</body>

</html>