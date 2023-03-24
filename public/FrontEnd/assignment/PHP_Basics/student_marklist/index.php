<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
						initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1716af8fd8.js" crossorigin="anonymous"></script>
    <title>Student marklist</title>

</head>

<body>

    <div class="container bg-light" style="margin-top: 2%;">
        <div class="text-center">
            <h1>Student Mark List</h1>
        </div>
        <div class="p-3">
        <?php 
        include('web/studentlist.php'); 
        ?>
        </div>



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>