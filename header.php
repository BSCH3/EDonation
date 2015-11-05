<?php
/*
 * @author Robin Nixon
 * @Date 10/03/2015
  @Source http://lpmj.net/4thedition/
 * 
 */
// Example 26-2: header.php
session_start();
require_once 'functions.php';

$userstr = ' (Guest)';

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr = " ($user)";
} else
    $loggedin = FALSE;


echo "<!DOCTYPE html><html><head>";
echo "<title>$appname$userstr</title><link rel='stylesheet" .
"<meta charset='utf-8'>"
. "<meta http-equiv='X-UA-Compatible' content='IE=edge'>"
. "<meta name='viewport' content='width=device-width, initial-scale=1'>"
. "<meta name='description' content=''>"
. "<meta name='author' content=''>"
. "<link rel='icon' href='Icon/favicon.ico?' type='image/x-icon'>"
. "<link href='CSS/bootstrap.min.css' rel='stylesheet' type='text/css'/>"
. "<link href='CSS/responsivestylesheet.css' rel='stylesheet' type='text/css'/>"
. "<link href='CSS/styles.css' rel='stylesheet' type='text/css'/>"
//. "<link href='CSS/style.css' rel='stylesheet' type='text/css'/>"
. "<link href='CSS/main.css' rel='stylesheet' type='text/css'>"
. "<link href = 'CSS/als_demo.css' rel = 'stylesheet' media='screen' type = 'text/css'/>"
//. "<link href='CSS/style_home.css' rel='stylesheet' type='text/css'/>"
//. "<script src='JS/cufon-yui.js' type='text/javascript'></script>"
//. "<script src='JS/kriesi.js' type='text/javascript'></script>"
//. "<script src='JS/tooltip.js' type='text/javascript'></script>"
//. "<script src='JS/jquery.featureList-1.0.0.js' type='text/javascript'></script>"
// . "<script src='JS/ie-emulation-modes-warning.js' type='text/javascript'></script>"
// ."<noscript><img height='1' width='1' alt='' style='display:none' src='https://www.facebook.com/tr?id=702470799842868&amp;ev=PixelInitialized' /></noscript>" 
. "<script type='text/javascript' src='https://www.idonate.ie/js/jquery-1.9.1.min.js'></script>"
. "<script type='text/javascript' src='//www.googleadservices.com/pagead/conversion.js'></script>"
. "<script type='text/javascript' src='JS/jquery-1.9.1.min.js'></script>"
."<script type='text/javascript' src='https://www.idonate.ie/javascript/jquery-1.9.1.min.js'></script>"
."<script type='text/javascript' src='JS/jquery.als-1.1.min.js'></script>"
." <script type='text/javascript' src='JS/littleslide.js'></script>"
. "<script type='text/javascript' src='JS/litlleslide.js'></script>"
. "<script src='JS/javascript' type='text/javascript'></script>"
."<script src='JS/swfobject_modified.js' type='text/javascript'></script>"
."<script type='text/javascript' src='https://www.idonate.ie/javascript/Bebas_400.font.js'></script>"
."<script type='text/javascript' src='https://www.idonate.ie/javascript/jquery.featureList-1.0.0.js'></script>"
."<script type='text/javascript' src='https://www.idonate.ie/javascript/kriesi.js'></script>"
."<script type='text/javascript' src='https://www.idonate.ie/js/jquery.easing.1.3.js'></script>"
."<script type='text/javascript' src='https://www.idonate.ie/js/imageSlider.js'></script>"
."<script type='text/javascript' src='https://www.idonate.ie/javascript/cufon-yui.js'></script>";


//. "<script src='JS/quizconfig.js' type='text/javascript'></script>"

"</head>"
        . "<body>";


echo ' <div class="navbar-wrapper">
        <div class="container>
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">IDonation</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="makedonation.php">Make A Donation</a></li>
                            <li><a href="startfundrasing.php">Start Fundraising</a></li>
                            <li><a href="listofcharities.php">Carities List</a></li>
                            <li><a href="prioritizedcharities.php">Prioritized Charities</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Events<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="currentlyevents.php">Currently Events</a></li>
                                    <li><a href="pastevents.php">Past Events</a></li>
                                    <li><a href="upcomingevents.php">Second Generation</a></li>
                                    <li><a href="3rd_generation.php">Third Generation</a></li>
                                    <li><a href="4th_generation.php">Fourth Generation</a></li>
                                    <li><a href="5th_generation.php">Fifth Generation</a></li>
                                </ul>
                            </li>

                            <li><a href="signup.php">Registration</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                        </ul>

                    </div>';
if ($loggedin) {
    echo "<font color='white'>You are logged in as <a href='members.php?view=$user'>$userstr</a> &nbsp;|&nbsp; "
    . "<a href='logout.php'>Log out</a></font>";
} else {
    echo "<font color='white'>You are not logged in.</font>";
}
//echo "<div class='appname'>You are logged in as <a href='profile.php'>$userstr</a> <a href='logout.php'>Log Out</a></div>
echo "</div>";

echo '         
            </nav>

        </div>
    </div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#" data-slide-to="0" class="active"></li>
            <li data-target="#" data-slide-to="1"></li>
            <li data-target="#" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="Images/header1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">';
if ($loggedin) {
    
}

echo'</div>
                </div>
            </div>

            <div class="item">
                <img src="Images/fi_large.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>                

            <div class="item">
                <img src="Images/header1.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>

            <div class="item">
                <img src="Images/1866bykgo2s1njpg.jpg" alt="Fourth slide">
                <div class="container">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class= "glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>';
?>
<!-- Bootstrap core JavaScript
 ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="JS/bootstrap.min.js" type="text/javascript"></script>
<script src="JS/docs.min.js" type="text/javascript"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="JS/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
<!--<script type="text/javascript" src="https://www.idonate.ie/js/jquery.als-1.1.min.js"></script>-->

