<?php 

 if($_GET['city']) {
    $forecastPage = file_get_contents("https://www.weather-forecast.com/locations/London/forecasts/latest");

        // $pageArray = explode( )
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
    <title>Weather App</title>
</head>

<body class="bg-dar">
<div class="container">
        <form method="get">
        <H1>What's The Weather</H1>
        <h5>Enter The City</h5>
        <br><br>
        <input type="text" name="city" class="form-control" style="width: 27rem; margin: 0 auto;" value="london" placeholder="City Name (Eg: Chennai)" >
        <br><br>
        <button class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>