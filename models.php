<?php
session_start(); // Right at the top of your script
error_reporting( error_reporting() & ~E_NOTICE )
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Models</title>
    <meta charset="UTF-8">
    <title>Audi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: whitesmoke;" >

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav mx-auto"  >
                    <li class="nav-item1 ">
                        <a class="nav-link2" href="./A1.html" >A1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item1 ">
                        <a class="nav-link2" href="./models.php">A3 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item1 ">
                        <a class="nav-link2" href="./index.html" >A4 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item1 ">
                        <a class="nav-link2" href="./index.html" >A5 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item1 ">
                        <a class="nav-link2" href="./index.html" >A6 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item1 ">
                        <a class="nav-link2" href="./index.html" >A7 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item1 ">
                        <a class="nav-link2" href="./index.html" >A8 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item1 ">
                        <a class="nav-link2" href="./index.html" >Q8 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item1 ">
                        <a class="nav-link2" href="./index.html">RS4 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item1 ">
                        <a class="nav-link2" href="./index.html">RS6 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item1 ">
                        <a class="nav-link2" href="./index.html">E-TRON <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>


                <ul class="navbar-nav ml-auto">
                    <li class="nav-item1 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <?php
                            if($_SESSION["loggedin"] == true){
                            echo htmlspecialchars($_SESSION["username"]);?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="logout.php" class="">Sign Out
                            </a>
                            <a href="mycars.php" class="">My cars
                            </a>
                            <a href="resetpassword.php" class="">Reset password
                            </a>

                        </div>
                    </li>


                    <?php }elseif($_SESSION["loggedin"] == false){

                        ?>
                        <a class="nav-link2" href="./login.php" >Login <span class="sr-only">(current)</span></a>
                        <a class="nav-link2" href="./register.php">Sign up <span class="sr-only">(current)</span></a>
                    <?php }; ?>


        </nav>

        <div class="main">

            <div class="specBoxModels">
                <div class="specLeftModels">

                    <div class="mg-image">
                        <a class="zoom" href="./index.html">
                            <img src="./images/1920x600-stage-aa1-181001-oe.jpg" alt="">
                        </a>
                    </div>

                    <div class="mg-image">
                        <a class="zoom" href="./index.html">
                            <img src="./images/1920x600-AA3_L_161002_1-1920x1080.jpg" alt="">
                        </a>
                    </div>

                    <div class="mg-image">
                        <a class="zoom" href="./index.html">
                            <img src="./images/xag-1400x2048-ita-135197.jpg" alt="">
                        </a>
                    </div>

                    <div class="mg-image">
                        <a class="zoom" href="./index.html">
                            <img src="./images/a5-coupe-audi-silver-front-angle-oasis-1920x600.jpg" alt="">
                        </a>
                    </div>



                </div>

                <div class="specRightModels">

                    <div class="mg-image">
                        <a class="zoom" href="./index.html">
                            <img src="./images/merveilleux-audi-france-14.jpg" alt="">
                        </a>
                    </div>

                    <div class="mg-image">
                        <a class="zoom" href="./index.html">
                            <img src="./images/Modul1_Stage_AA7_17009_1920x600-min.jpg" alt="">
                        </a>
                    </div>

                    <div class="mg-image">
                        <a class="zoom" href="./index.html">
                            <img src="./images/audi-a8-new-a8-l-gt-a8-gt-audi-ireland-of-audi-a8.jpg" alt="">
                        </a>
                    </div>

                    <div class="mg-image">
                        <a class="zoom" href="./index.html">
                            <img src="./images/1920x600-Stage-Q8-Key-Cover.jpg" alt="">
                        </a>
                    </div>



                </div>
            </div>



        </div>
        <div class="footer">

        </div>
    </div>

</body>
</html>