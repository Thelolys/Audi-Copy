<?php
session_start(); // Right at the top of your script
error_reporting( error_reporting() & ~E_NOTICE );
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Audi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href=" ./css/main.css" >
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--<script-->
    <!--src="https://code.jquery.com/jquery-3.3.1.min.js"-->
    <!--integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="-->
    <!--crossorigin="anonymous"></script>-->
    <script src="js/bootstrap.min.js"></script>

</head>
<style>
    .mySlides {display:none;}
</style>
<body>

<div class="mainbox">

    <!--<div class="navBar">-->
    <!--<ul>-->
    <!--<li><a href="./index.html">Home</a></li>-->
    <!--<li><a href="./models.html">Models</a></li>-->
    <!--<li><a href="./audisport.html">Audi Sport</a></li>-->
    <!--<li><a href="./innovation.html">Innovation</a></li>-->
    <!--</ul>-->
    <!--</div>-->
    <!--<div class="navbar navbar-inverse navbar-static-top">-->
    <!--<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">-->
    <!--<span class="icon-bar"></span>-->
    <!--<span class="icon-bar"></span>-->
    <!--<span class="icon-bar"></span>-->
    <!--</button>-->
    <!--<div class="collapse navbar-collapse navHeaderCollapse">-->
    <!--<ul class="nav navbar-nav navbar-center">-->
    <!--<li><a href="./index.html">Home</a></li>-->
    <!--<li><a href="./models.html">Models</a></li>-->
    <!--<li><a href="./audisport.html">Audi Sport</a></li>-->
    <!--<li><a href="./innovation.html">Innovation</a></li>-->

    <!--</ul>-->

    <!--</div>-->
    <!--</div>-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;" >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto"  >
                <!--<li class="nav-item active">-->
                <!--<a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>-->
                <!--<a class="nav-link" href="./index.html">Models <span class="sr-only">(current)</span></a>-->
                <!--<a class="nav-link" href="./index.html">Sport <span class="sr-only">(current)</span></a>-->
                <!--<a class="nav-link" href="./index.html">Innovation <span class="sr-only">(current)</span></a>-->
                <!--</li>-->
                <li class="nav-item ">
                    <a class="nav-link1" href="./index1.php" >Home <span class="sr-only">(current)</span></a>
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

                <!--<li class="nav-item">-->
                <!--<a class="nav-link" href="./index.html">Home</a>-->
                <!--</li>-->
                <!--<li class="nav-item">-->
                <!--<a class="nav-link d-flex " href="./models.html">Models</a>-->
                <!--</li>-->
                <!--<li class="nav-item">-->
                <!--<a class="nav-link" href="./models.html">Sport</a>-->
                <!--</li>-->
                <!--<li class="nav-item">-->
                <!--<a class="nav-link " href="./models.html">Innovation</a>-->
                <!--</li>-->

                <!--DROPDOWN-->
                <!--<li class="nav-item dropdown">-->
                <!--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--Dropdown-->
                <!--</a>-->
                <!--&lt;!&ndash;<div class="dropdown-menu" aria-labelledby="navbarDropdown">&ndash;&gt;-->
                <!--&lt;!&ndash;<a class="dropdown-item" href="#">Action</a>&ndash;&gt;-->
                <!--&lt;!&ndash;<a class="dropdown-item" href="#">Another action</a>&ndash;&gt;-->
                <!--&lt;!&ndash;<div class="dropdown-divider"></div>&ndash;&gt;-->
                <!--&lt;!&ndash;<a class="dropdown-item" href="#">Something else here</a>&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->
                <!--</li>-->
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: whitesmoke;" >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
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
                        <a href="resetpassword.php" class="">Reset password
                        </a>
                    </div>
                </li>


                <?php }elseif($_SESSION["loggedin"] == false){

                    ?>
                    <a class="nav-link2" href="./login.php" >Login <span class="sr-only">(current)</span></a>
                    <a class="nav-link2" href="./register.php">Sign up <span class="sr-only">(current)</span></a>
                <?php }; ?>

                <?php
                error_reporting( error_reporting() & ~E_NOTICE )?>



                <!--<li class="nav-item1 ">-->
                <!--<a class="nav-link2" href="./register.php">Sign up <span class="sr-only">(current)</span></a>-->
                <!--</li>-->

            </ul>

        </div>
    </nav>
    <h3>
    <?php
    $sql = "SELECT car_maker, car_model, car_year FROM car WHERE user_id = '".$_SESSION["id"]."'";
    $result = $link ->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["car_maker"]. " " . $row["car_model"]. " " . $row["car_year"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $link->close();
    ?>
    </h3>

    <a href="./addMyCar.php">Add a car </a>



</div>
</body>
</html>
