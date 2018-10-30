<?php
session_start(); // Right at the top of your script
error_reporting( error_reporting() & ~E_NOTICE )
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

                    <?php
                    error_reporting( error_reporting() & ~E_NOTICE )?>



                    <!--<li class="nav-item1 ">-->
                        <!--<a class="nav-link2" href="./register.php">Sign up <span class="sr-only">(current)</span></a>-->
                    <!--</li>-->

                </ul>

            </div>

        </nav>

        <div class="gallery-content gallery-section" style="max-width: 100%;" align="middle">
            <img class="mySlides w3-animate-left" src="./images/Audi_CGI_RS5_Vedat_Afuzi_Design_Red_Coupe_538505_1920x1080.jpg" style="width:100%" >
            <img class="mySlides w3-animate-left" src="./images/alll-new-audi-a5-sportback-1920x1080.jpg" style="width:100%">
            <img class="mySlides w3-animate-left" src="./images/1920x1080_InlineMediaGallery_AA8_D_171016.jpg" style="width:100%">

        </div>

        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}
                x[myIndex-1].style.display = "block";
                setTimeout(carousel, 4000);
            }
        </script>



        <div class="main">

            <h1 align="center"> Experience the world of Audi</h1>
            <h2 align="center"> Experience our theme worlds and be fascinated.</h2>

            <div class="specBox">
                <div class="specLeft">
                    <div class="mg-image">
                        <a class="zoom" href="./index.html">
                            <img src="./images/1920x600_01_Stage_hero_neu.png" alt="">

                        </a>
                    </div>
                    <div class="mg-image">
                        <a class="zoom" href="./index.html">
                            <img src="./images/1audiq8.png" alt="">

                        </a>
                    </div>
                    <div class="mg-image">
                        <a class="zoom" href="./index.html">
                            <img class="quattro" src="./images/a5-coupe-audi-silver-front-angle-oasis-1920x600.png" alt="">
                        </a>
                    </div>


                </div>

                <div class="specRight">
                    <div class="mg-image">
                        <a class="zoom" href="./index.html">
                            <img src="./images/maxresdefault.png" alt="">

                        </a>
                    </div>
                    <div class="mg-image">
                        <a class="zoom" href="./index.html">
                            <img src="./images/audi-rs6.png" alt="">

                        </a>
                    </div>
                    <div class="mg-image">
                        <a class="zoom" href="./index.html">
                            <img src="./images/A189696_x750.png" alt="">

                        </a>
                    </div>

                </div>
            </div>




        </div>


        <!--<div class="left"></div>-->

        <!--<div class="right"></div>-->

        <div class="footer"></div>



    </div>

</body>
</html>