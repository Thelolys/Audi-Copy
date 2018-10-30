<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
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
                    <a class="nav-link1 " href="./welcome.php" >Home <span class="sr-only">(current)</span></a>
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
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: whitesmoke;" >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
            <ul class="navbar-nav ml-auto"  >
                <li class="nav-item1 ">
                     <?php echo htmlspecialchars($_SESSION["username"]); ?>
                </li>
                <li>
                    <a href="logout.php" class="btn btn-danger">Sign Out of Your account
                    </a>
                </li>
            </ul>

</body>
</html>