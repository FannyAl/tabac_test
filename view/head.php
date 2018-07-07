<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="../lib/images/logo.png">
        <title>Taba(c)ddiction</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="../lib/css/ionicons.min.css">
        <link href='https://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
        <!-- animate css -->
        <link rel="stylesheet" href="../lib/css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="../lib/css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="../lib/css/owl.carousel.css">
        <link rel="stylesheet" href="../lib/css/owl.theme.css">
        <link rel="stylesheet" href="../lib/css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="../lib/css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="../lib/css/responsive.css">
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="../lib/js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="../lib/js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="../lib/js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="../lib/js/wow.min.js"></script>
        <!-- slider js -->
        <script src="../lib/js/slider.js"></script>
        <script src="../lib/js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="../lib/js/main.js"></script>
    </head>

        <?php 
            $path = $_SERVER['PHP_SELF']; 
            $file = basename ($path);
        ?>


    <body>
        <!--
        ==================================================
        Nav-bar
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">

                    <div class="col-md-3 col-lg-3 col-xs-3">
                        <!-- logo -->
                        <div class="navbar-brand">
                            <a href="#null" onclick="javascript:history.back();">
                                <img src="../lib/images/test/return.png" alt="" width="50px">
                            </a>
                        </div>
                        <!-- /logo -->
                    </div>


                    <div class="col-md-6 col-lg-6 col-xs-6">
                        <!-- Count -->
                        <div class="navbar-count">
                            <center><img src="../lib/images/test/test_content/<?php echo "$file.png"; ?>" alt="" width="100px"></center>
                        </div>
                        <!-- /Count -->
                    </div>


                    <div class="col-md-3 col-lg-3 col-xs-3">
                        <!-- responsive nav button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <img src="../lib/images/test/MenuBlue.png" alt="" width="50px">
                        </button>
                        <!-- /responsive nav button -->
                    </div>


                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="../index.php" ><img src="../lib/images/homeLogo.png" width="30px">&nbsp Accueil</a></li>
                            <li><a href="../ctr/annuaire_ctr.php" ><img src="../lib/images/phoneLogo.png" width="30px">&nbsp Près de chez toi</a></li>
                            <li><a href="http://apleat.com/" target="_blank" ><img src="../lib/images/WebLogo.png" width="30px">&nbsp Apleat.com</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->

            </div>
        </header>


<script language="javascript">
function changeStyle (_divId_, _newSize_){
 if ( document.getElementById(_divId_) != null ){
    document.getElementById(_divId_).style.width = _newSize;
 }
}
</script>
