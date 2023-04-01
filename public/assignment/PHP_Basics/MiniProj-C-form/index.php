<?php


$error = ""; $successMessage = "";

if ($_POST) {



  if (!$_POST["email"]) {
    $error .= "The Email-Id is required.<br>";
  }
  if (!$_POST["subject"]) {
    $error .= "The subject is required.<br>";
  }
  if (!$_POST["content"]) {
    $error .= "The Content is required.<br>";
  }

  if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
    $error .= "The email Id is required.<br>";
  }
  if ($error != "") {

    $error = '<div class="alert alert-danger"><p><b>There were error in your form:</b></p>' . $error . '</div>';
  } else {
    $emailTo = "vgvg@gmail.com";
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $headers = "From: " . $_POST['email'];
    if($emailTo != ""){
      if (mail($emailTo, $subject, $content, $headers) ) {
    $successMessage = '<div class="alert alert-success"><p><b>The mail has sended successfully</b></p></div>';
  }
  }else{
    $error = '<div class="alert alert-danger"><p><b>The mail has not been sended successfully. Please try again later</b></p></div>';
  }
}
}
















?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/app.js"></script>
    <title>C-Form</title>
</head>

<body class="bg-info">



    <!-- Contact Form -->

    <div class="text-center">
        <h1 class="text-white">Contact Form</h1>
    </div>

    <div class="container  bg-light style">
        <div id="error"><?php echo $error.$successMessage; ?></div>
        <form method="post">
            <div class="mb-3">
                <label for="Email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="Email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="Subject" class="form-label">Subject</label>
                <input type="text" class="form-control" name="subject" id="Subject">
            </div>
            <div class="mb-3">
                <label for="Content" class="form-label">What's the Qureies</label>
                <textarea class="form-control" aria-label="With textarea" name="content" id="Content"></textarea>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Send</button>
        </form>



    </div>

    <!-- Script file -->
    <script>
    // $("form").submit(function(e) {
    //   e.preventDefault();

    //   var error = "";
    //   if ($("#Email").val() == "") {
    //     error += "The Email ID is required.<br>"
    //   }
    //   if ($("#Subject").val() == "") {
    //     error += "The subject field is required.<br>"
    //   }
    //   if ($("#Content").val() == "") {
    //     error += "The Content field is required."
    //   }


    //   if (error != "") {
    //     $("#error").html('<div class="alert alert-danger"><p><b>There were error in your form:</b></p>' + error + '</div>');
    //   } else {
    //     // $('#error').html('<div class="alert alert-success"><p><b>Successfully Submitted</b></p></div>');
    //     $("form").unbind("submit").submit();
    //   }



    // });
  </script>
</body>

</html>