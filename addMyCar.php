<?php
require_once "config.php";
session_start();

$maker = $model =$year ="";
$maker_err = $model_err = $year_err ="";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["car_maker"]))) {
        $maker_err = "Please enter a model name.";
    } else {
        $maker = trim($_POST["car_maker"]);
    }

    if (empty(trim($_POST["car_model"]))) {
        $model_err = "Please enter a model name.";
    } else {
        $model = trim($_POST["car_model"]);
    }
    if (empty(trim($_POST["car_year"]))) {
        $year_err = "Please enter a car year.";
    } else {
        $year = trim($_POST["car_year"]);
    }
    if (empty($maker_err) && empty($model_err) && empty($year_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO car (car_maker, car_model, car_year, user_id) VALUES (?, ?, ?, '{$_SESSION["id"]}')";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_maker, $param_model, $param_year);

            // Set parameters
            $param_maker = $maker;
            $param_model = $model;
            $param_year = $year;


            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: mycars.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Models</title>
    <meta charset="UTF-8">
    <title>Audi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href=" ./css/main.css" >
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<script-->
    <!--src="https://code.jquery.com/jquery-3.3.1.min.js"-->
    <!--integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="-->
    <!--crossorigin="anonymous"></script>-->
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="mainbox">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;" >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto"  >

                <li class="nav-item ">
                    <a class="nav-link1 " href="./index1.php" >Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link1" href="./models.php">Models <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link1" href="./index.html">Sport <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link1" href="./index.html">Innovation <span class="sr-only">(current)</span></a>
                </li>

            </ul>

        </div>

    </nav>
    <div class="registerMain">
        <div class="wrapper">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($maker_err)) ? 'has-error' : ''; ?>">
                    <label>car maker</label>
                    <input type="text" name="car_maker" class="form-control" value="<?php echo $maker; ?>">
                    <span class="help-block"><?php echo $maker_err; ?></span>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($model_err)) ? 'has-error' : ''; ?>">
                    <label>car model</label>
                    <input type="text" name="car_model" class="form-control" value="<?php echo $model; ?>">
                    <span class="help-block"><?php echo $model_err; ?></span>
                </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($year_err)) ? 'has-error' : ''; ?>">
                    <label>car year</label>
                    <input type="number" name="car_year" min="1900" max="2020" class="form-control" value="<?php echo $year; ?>">
                    <span class="help-block"><?php echo $year_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">

                </div>

            </form>
        </div>
    </div>
</body>
</html>
