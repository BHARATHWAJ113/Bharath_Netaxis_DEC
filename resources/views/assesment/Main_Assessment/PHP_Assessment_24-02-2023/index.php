<?php
ob_start();
include("config.php");
include("session.php");
include('upload.php');

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Word-Book</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1716af8fd8.js" crossorigin="anonymous"></script>
</head>
<style>
    .navbar-nav {
        width: 100%;
    }

    @media(min-width:568px) {
        .end {
            margin-left: auto;
        }
    }

    @media(max-width:768px) {
        #post {
            width: 100%;
        }
    }

    #clicked {
        padding-top: 1px;
        padding-bottom: 1px;
        text-align: center;
        width: 100%;
        background-color: #ecb21f;
        border-color: #a88734 #9c7e31 #846a29;
        color: black;
        border-width: 1px;
        border-style: solid;
        border-radius: 13px;
    }

    #profile {
        background-color: unset;

    }



    body {
        background-color: black;
    }

    #nav-items li a,
    #profile {
        text-decoration: none;
        color: rgb(224, 219, 219);
        background-color: black;
    }


    .comments {
        margin-top: 5%;
        margin-left: 20px;
    }

    .darker {
        border: 1px solid #ecb21f;
        background-color: black;
        float: right;
        border-radius: 5px;
        padding-left: 40px;
        padding-right: 30px;
        padding-top: 10px;
    }

    .comment {
        border: 1px solid rgba(16, 46, 46, 1);
        background-color: rgba(16, 46, 46, 0.973);
        float: left;
        border-radius: 5px;
        padding-left: 40px;
        padding-right: 30px;
        padding-top: 10px;

    }

    .comment h4,
    .comment span,
    .darker h4,
    .darker span {
        display: inline;
    }

    .comment p,
    .comment span,
    .darker p,
    .darker span {
        color: rgb(184, 183, 183);
    }

    h1,
    h4 {
        color: white;
        font-weight: bold;
    }

    label {
        color: rgb(212, 208, 208);
    }

    #align-form {
        margin-top: 20px;
    }

    .form-group p a {
        color: white;
    }

    #checkbx {
        background-color: black;
    }

    #darker img {
        margin-right: 15px;
        position: static;
    }

    .form-group input,
    .form-group textarea {
        background-color: black;
        border: 1px solid rgba(16, 46, 46, 1);
        border-radius: 12px;
    }

    form {
        border: 1px solid rgba(16, 46, 46, 1);
        background-color: rgba(16, 46, 46, 0.973);
        border-radius: 5px;
        padding: 20px;
    }
</style>

<body>



    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand " href="./index.php">
            <img src="wb.png" alt="Bootstrap" width="45" height="45" class="ms-3"><span class="navbar-brand mb-0 ms-2 text-danger"><b>WORD BOOK</b></span>
            </a>

            <h5 class="color_user ms-5">Welcome <span><b><?php echo isset($login_session) ? $login_session : 'Guest';
                                                            // echo isset($login_session_id) ? $login_session_id : '0';    
                                                            ?></b></span></h5>
            <h5 class="m-2 p-1 ms-3"><?php
                                        echo isset($add_error) ? $add_error : ' ';
                                        echo isset($comt_error) ? $comt_error : '';
                                        ?> </h5>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="bar-nav me-auto mb-1 mb-lg-0">




                    <button class="btn btn-success icon m-2 ms-5"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                        ADD NEW WORD</button>
                </div>
                <!-- //search php// -->
                <form class="d-flex" role="search" method="post">


                    <input class="form-control me-2" type="search" name='search_text' placeholder="Search" aria-label="Search">
                    <?php

                    if ($login_session == "Guest") {
                        echo "<a class='btn btn-outline-success' href='./login.php'>LOGIN</a>";
                    } else {

                        // echo "<a class='btn btn-outline-success me-2' href='./login.php'>LOGIN</a>";
                        echo "<a class='btn btn-outline-danger me-2' href='./logout.php'>LOGOUT</a>";
                    }
                    ?>
                </form>
                <!-- //search php function// -->


            </div>
        </div>
    </nav>

    <div class="container">
        <div class="mt-5 hide" id="addword" align="center">
            <form enctype="multipart/form-data" method="post" class="addForm">
                <input class="me-2 mb-4 addword" type="text" name="newword" placeholder="Add word" required><br>
                <input class="me-2 mb-4 addimg" type="file" name="fileToUpload" placeholder="Add Image" required><br>
                <!-- <input class="me-2 btn btn-success" name="addword" type="submit" value="ADD"> -->
                <button name="addword" class="btnedit" type="submit">ADD</button>

            </form>
        </div>

        <div class="row">
            <div class='container mt-5 text-center'>
                <h1>Welcome to Word Book</h1>
            </div>
            <!-- ----------------------------------------------Search in URL-------------------------------------------------------------->

            <?php
            $search_text = explode("/", basename($_SERVER['REQUEST_URI']))[0];
            $_SESSION['$entry_path'] = $search_text;
            // echo $search_text;

            if (($search_text == "index.php") || ($search_text == "PHP_Assessment_24-02-2023")) {
            } else {
                $sql = "select * from wb_words WHERE word LIKE '%$search_text%';";
                $result = $db->query($sql);
                $row = mysqli_fetch_array($result);
                $is_approve = isset($row['is_approve']) ? $row['is_approve'] : 404;
                $word_is = isset($row['word']) ? $row['word'] : '';
                // ------------------------------------------------------------------------------------------------------------ -->
                $sql_u = "select word,username from wb_words INNER JOIN wb_users ON wb_words.user_id = wb_users.id WHERE word LIKE '%$search_text%';";
                $result_u = $db->query($sql_u);
                $row_u = mysqli_fetch_array($result_u);
                // ------------------------------------------------------------------------------------------------------------

                // echo $is_approve;
                if (empty($search_text)) {
                    echo "text is empty";
                    // } elseif(){

                } else {
                    $word_name = isset($row_u['username']) ? $row_u['username'] : 'noone';
                    // echo $word_name;
                    if ($word_name == $login_session) {
                        $_SESSION['$word_id'] = $row['id'];

                        echo "  <div class='col-md-5 col-lg-8 mt-4'>
                                    <div class='card' style=''>
                                    <img src='" . $row['image'] . "' class='img-thumbnail border-bottom' style='height:200px; width:300px;' alt='Sample Image'>
                                    <div class='card-body'>
                                    <h3 class='card-title'><b>" . $row['word'] . "</b></h3>
                                    </div>
                                    
                                    <div class='card-body'>
                                    <p class='h4'><b>Synonyms</b>&nbsp; <a href='index.php?id=" . $row['id'] . "' class='card-link'>";


                        $showS = "SELECT word,is_aprove_a_s  from wb_words INNER JOIN wb_words_data ON wb_words.id = wb_words_data.word_id WHERE is_synonym=1 AND parent_id = $word_id";
                        $result_showS = $db->query($showS);

                        while ($row_showS = mysqli_fetch_array($result_showS)) {
                            $is_aprove_a_s = $row_showS['is_aprove_a_s'];
                            // echo $row_showS[];
                            // echo $is_aprove_a_s;
                            if ($is_aprove_a_s == 1) {

                                echo "<a href='" . $row_showS['word'] . "' class='card-link'>" . $row_showS['word'] . ",</a>";
                            }
                        }


                        echo "<button type='button' class='btn btn-danger ms-2 p-1' data-bs-toggle='modal' data-bs-target='#synonyms'>
                                        <i class='fa-solid fa-plus'></i>
                                      </button> </p><br>
                                        <p class='h4'><b>Antonyms</b>&nbsp;";

                        $showS = "SELECT word,wb_words_data.is_aprove_a_s from wb_words INNER JOIN wb_words_data ON wb_words.id = wb_words_data.word_id WHERE is_antonym=1 AND parent_id = $word_id";
                        $result_showS = $db->query($showS);
                        while ($row_showS = mysqli_fetch_array($result_showS)) {
                            $is_aprove_a_s = $row_showS['is_aprove_a_s'];
                            // echo $is_aprove_a_s;
                            if ($is_aprove_a_s == 1) {

                                echo "<a href='" . $row_showS['word'] . "' class='card-link'>" . $row_showS['word'] . ",</a>";
                            }
                        }


                        echo "</a> <button type='button' class='btn btn-danger ms-2 p-1' data-bs-toggle='modal' data-bs-target='#antonyms'>
                                    <i class='fa-solid fa-plus'></i>
                                  </button></p>
                                    </div>
                                    <div class='card-body'>
                                    <!----- <h5 class='card-title'>" . $login_session_id . "</h5> ---->
                                    <hr>
                                    <div class='text-center m-3'>
                                    <button class='btn btn-warning c_icon'><i class='fa fa-plus-circle' aria-hidden='true'></i> Comment</button>
                                    </div>
                                    <form id='algin-form' class='hide' method='post'>
                                        <div class='form-group'>
                                            <h4>Leave a comment</h4>
                                            <label for='message'>Message</label>
                                            <textarea name='msg' id='msg' cols='30' rows='5' class='form-control  text-white' style='background-color: black;'></textarea>
                                        </div>
                                        <div class='form-group'>
                                            <label for='name'>Name</label>
                                            <input type='text' name='name' value='" . $login_session . "' id='fullname' class='form-control text-white m-2' readonly>
                                        </div>
                                        <div class='form-group text-center'>
                                            <button type='submit' name='commentsend' id='post' class='btn btn-warning'>Post</button>
                                        </div>
                                    </form>
                                    <div class='comments'>
                                    <div class='row'>";
                        $c_sql = "select * from wb_comments inner join wb_users on wb_comments.user_id = wb_users.id WHERE wb_comments.is_aprove = 1 And wb_comments.word_id = $word_id ";
                        $c_result = $db->query($c_sql);
                        // $c_row = mysqli_fetch_array($c_result);
                        while ($c_row = mysqli_fetch_array($c_result)) {
                            echo "
                                            
                                            <div class='col-lg-4'>
                                            <div class='card m-2' style='max-width:300px';>
                                            <div class='card-header'>Comments
                                            </div>
                                            <div class='card-body'>
                                            <blockquote class='blockquote mb-0'>
                                                <p>" . $c_row['comments'] . "</p>
                                                <footer class='blockquote-footer'>" . $c_row['username'] . " <span>is commented at </span><cite title='Source Title'>" . $c_row['c_time'] . "</cite></footer>
                                            </blockquote>
                                            </div>
                                        
                                        </div>
                                        </div>
                                            ";
                        }

                        echo "</div>
                                   </div>
                                    </div>
                                    </div>
                                    </div>";
                    } elseif ($is_approve == 404) {
                        // echo "<div class='container mt-5 text-center'>
                        // <h1></h1>
                        // </div>";
                        echo "
                        <center class=' mt-5'>
                        <img src='assets/img/404/404_gif_page.gif' class='img-thumbnail border-bottom' style='height:600px; width:700px; border-radius:25px;' alt='Sample Image'>
                        </center>
                         ";
                        if ($word_is == '') {
                        } else {
                            echo "
                        <center class=' mt-5'>
                        <img src='assets/img/404/404_gif_page.gif' class='img-thumbnail border-bottom' style='height:600px; width:700px; border-radius:25px;' alt='Sample Image'>
                        </center>
                        ";
                        }
                    } elseif ($is_approve == 0) {
                        echo "
                        <center class=' mt-5'>
                        <img src='assets/img/404/404_gif_page.gif' class='img-thumbnail border-bottom' style='height:600px; width:700px; border-radius:25px;' alt='Sample Image'>
                        </center>
                        ";
                    } else {

                        $_SESSION['$word_id'] = $row['id'];

                        echo "  <div class='col-md-5 col-lg-8 mt-4'>
                            <div class='card' style='width: 900px;'>
                            <img src='" . $row['image'] . "' class='img-thumbnail' style='height:250px; width:350px;' alt='Sample Image'>
                            <div class='card-body'>
                            <h3 class='card-title'><b>" . $row['word'] . "</b></h3>
                            </div>
                            
                            <div class='card-body'>
                            <p class='h4'><b>Synonyms</b>&nbsp;";
                        // href='index.php?id=" . $row['id'] . "'

                        $showS = "SELECT word,is_aprove_a_s  from wb_words INNER JOIN wb_words_data ON wb_words.id = wb_words_data.word_id WHERE is_synonym=1 AND parent_id = $word_id";
                        $result_showS = $db->query($showS);

                        while ($row_showS = mysqli_fetch_array($result_showS)) {
                            $is_aprove_a_s = $row_showS['is_aprove_a_s'];
                            // echo $row_showS[];
                            // echo $is_aprove_a_s;
                            if ($is_aprove_a_s == 1) {

                                echo "<a href='" . $row_showS['word'] . "' class='card-link'>" . $row_showS['word'] . ",</a>";
                            }
                        }


                        echo "<button type='button' class='btn btn-danger ms-2 p-1' data-bs-toggle='modal' data-bs-target='#synonyms'>
                            <i class='fa-solid fa-plus'></i>
                          </button> </p><br>
                            <p class='h4'><b>Antonyms</b>&nbsp;";

                        $showS = "SELECT word,wb_words_data.is_aprove_a_s from wb_words INNER JOIN wb_words_data ON wb_words.id = wb_words_data.word_id WHERE is_antonym=1 AND parent_id = $word_id";
                        $result_showS = $db->query($showS);
                        while ($row_showS = mysqli_fetch_array($result_showS)) {
                            $is_aprove_a_s = $row_showS['is_aprove_a_s'];
                            // echo $is_aprove_a_s;
                            if ($is_aprove_a_s == 1) {

                                echo "<a href='" . $row_showS['word'] . "' class='card-link'>" . $row_showS['word'] . ",</a>";
                            }
                        }




                        echo "</a> <button type='button' class='btn btn-danger ms-2 p-1' data-bs-toggle='modal' data-bs-target='#antonyms'>
                            <i class='fa-solid fa-plus'></i>
                          </button></p>
                            </div>
                            <div class='card-body'>
                            <!-----<h5 class='card-title'>" . $login_session_id . "</h5>---->
                            <hr>
                            <div class='text-center m-3'>
                            <button class='btn btn-warning c_icon'><i class='fa fa-plus-circle' aria-hidden='true'></i> Comment</button>
                            </div>
                            <form id='algin-form' class='hide' method='post'>
                                <div class='form-group'>
                                    <h4>Leave a comment</h4>
                                    <label for='message'>Message</label>
                                    <textarea name='msg' id='msg' cols='30' rows='5' class='form-control  text-white' style='background-color: black;'></textarea>
                                </div>
                                <div class='form-group'>
                                    <label for='name'>Name</label>
                                    <input type='text' name='name' value='" . $login_session . "' id='fullname' class='form-control text-white m-2' readonly>
                                </div>
                                <div class='form-group text-center'>
                                    <button type='submit' name='commentsend' id='post' class='btn btn-warning'>Post</button>
                                </div>
                            </form>
                            <div class='comments'>
                            <div class='row'>";
                        $c_sql = "select * from wb_comments inner join wb_users on wb_comments.user_id = wb_users.id WHERE wb_comments.is_aprove = 1 And wb_comments.word_id = $word_id ";
                        $c_result = $db->query($c_sql);
                        // $c_row = mysqli_fetch_array($c_result);
                        while ($c_row = mysqli_fetch_array($c_result)) {
                            echo "
                                    
                                    <div class='col-lg-4'>
                                    <div class='card m-2' style='max-width:300px';>
                                    <div class='card-header'>Comments
                                    </div>
                                    <div class='card-body'>
                                    <blockquote class='blockquote mb-0'>
                                        <p>" . $c_row['comments'] . "</p>
                                        <footer class='blockquote-footer'>" . $c_row['username'] . " <span>is commented at </span><cite title='Source Title'>" . $c_row['c_time'] . "</cite></footer>
                                    </blockquote>
                                    </div>
                                
                                </div>
                                </div>
                                    ";
                        }

                        echo "</div>
                           </div>
                            </div>
                            </div>
                            </div>";
                    }
                }
            };
            ?>


            <!-- ----------------------------------------------Search in text box---------------------------------------------------------->
            <?php


            // if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_POST["search_text"])) {
                // ------------------------------------------------------------------------------------------------------------
                $URL = $db->real_escape_string($_REQUEST['search_text']);
                header("location:$URL");
            }
            // ------------------------------------------------------------------------------------------------------------


            
            if (isset($_POST["commentsend"])) {

                // echo "checking";
                extract($_POST);
                $sql = "INSERT IGNORE INTO wb_comments(comments,user_id,word_id,c_time) VALUES('$msg',$login_session_id,$word_id,now())";
                $comt_error = "";
                // echo $db->query($sql);
                if ($db->query($sql) == TRUE) {
                    echo "<p class='alert alert-success' ><b>The data is inserted sucessfully<b></p>";
                } else {
                    echo "<p class='alert alert-danger'><b>The data is not inserted Login or check backend conn</p>";
                }
            };

            ?>

        </div>





    </div>





    <!-- Modal for synonyms -->
    <div class="modal fade" id="synonyms" tabindex="-1" aria-labelledby="synonymsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="synonymsLabel"> Add Synonyms </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-5" align="center">
                        <form enctype="multipart/form-data" method="post" class="bg-light border-0">
                            <input class="me-2 mb-4 addword" type="text" name="newword" placeholder="Add word" required><br>
                            <input class="me-2 mb-4 addimg" type="file" name="fileToUploadToSynonyms" placeholder="Add Image" required><br>
                            <button name="synonymsbtn" class="btnedit" type="submit">ADD</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>







    <!-- Modal antonyms -->
    <div class="modal fade" id="antonyms" tabindex="-1" aria-labelledby="antonymsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="antonymsLabel"> Add Antonyms </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-5" align="center">
                        <form enctype="multipart/form-data" method="post" class="bg-light border-0">
                            <input class="me-2 mb-4 addword" type="text" name="newword" placeholder="Add word" required><br>
                            <input class="me-2 mb-4 addimg" type="file" name="fileToUploadToAntonym" placeholder="Add Image" required><br>
                            <button name="antonymsbtn" class="btnedit" type="submit">ADD</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>









    <script src="./assets/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script>
        //Toggle button

        $(".icon").click(function() {
            $("#addword").slideToggle()
        });

        $(".c_icon").click(function() {
            $("#algin-form").slideToggle()
        });
    </script>
</body>

</html>