<?php
session_start(); //start session.
?>

<!DOCTYPE html>
<html>
    <head>
        <base href="/mbk/build/src/desktop/Home/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Home - RoQ System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link href="../../../stylesheets/stylesheet-mbk-home.css" rel="stylesheet" type="text/css" />

        <link rel="shortcut icon" href="../../../images/images-flaty_theme/favicon/favicon.ico">
    </head>
    <body>

        <?php

            if(isset($_SESSION['userName']) && $_SESSION['userName'] != "") {
                    //Task to do
            } else {

                 header('Location: ../../../Login/index.php'); //redirect URL
            }
        ?>

                <!-- Admin - Navbar  -->
                <!-- BEGIN Navbar -->
        <!-- <div id="navbar" class="navbar"> -->
        <div id="navbar" class="navbar navbar-fixed navbar-blue">
            <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
                <span class="fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="#">
                <small>
                    <i class="fa fa-desktop"></i>
                    WLMA-MIS
                </small>
            </a>

            <!-- BEGIN Navbar Buttons -->
            <ul class="nav flaty-nav pull-right">

                        <!-- navbar - Button Task  -->

                        <!-- navbar - Button Notifications  -->

                        <!-- navbar - Button Messages  -->

                        <!-- navbar - Button User  -->
                                        <!-- BEGIN Button User -->
                <li class="user-profile">
                    <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                        <img class="nav-user-photo" src="../../../images/images-flaty_theme/img/demo/avatar/avatar_kapook.jpg" alt="Kapook's Photo" />
                        <span class="hhh" id="user_info">
                            Kapook
                        </span>
                        <i class="fa fa-caret-down"></i>
                    </a>

                    <!-- BEGIN User Dropdown -->
                    <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                        <li class="nav-header">
                            <i class="fa fa-clock-o"></i>
                            Logined From 20:45
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-cog"></i>
                                Account Settings
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                Edit Profile
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-question"></i>
                                Help
                            </a>
                        </li>

                        <li class="divider visible-xs"></li>

                        <li class="visible-xs">
                            <a href="#">
                                <i class="fa fa-tasks"></i>
                                Tasks
                                <span class="badge badge-warning">4</span>
                            </a>
                        </li>
                        <li class="visible-xs">
                            <a href="#">
                                <i class="fa fa-bell"></i>
                                Notifications
                                <span class="badge badge-important">8</span>
                            </a>
                        </li>
                        <li class="visible-xs">
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                Messages
                                <span class="badge badge-success">5</span>
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <!-- <a href="../Login/index.php">
                                <i class="fa fa-off"></i>
                                Logout
                            </a> -->
                            <a href="#" id="button-logout">
                                <i class="fa fa-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                    <!-- BEGIN User Dropdown -->
                </li>
                <!-- END Button User -->

            </ul>
            <!-- END Navbar Buttons -->
        </div>
        <!-- END Navbar -->


        <!-- BEGIN Container -->
        <div class="container sidebar-blue" id="main-container">

            <!-- Home  -->
                <!-- BEGIN Content -->
    <div id="main-content" >


        <!-- Home - Container - MainContent - PageTitle  -->
                        <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i>   Register Online by QRCode</h1>
                        <h4>You can start your customization from this one!</h4>
                    </div>
                </div>
                <!-- END Page Title -->


        <!-- Home - Container - MainContent - breadCrumbs  -->
                        <!-- BEGIN Breadcrumb -->
                <div>
                    <ul class="breadcrumb">
                        <li class="active"><i class="fa fa-home"></i> Home</li>
                        <!-- <li class="active"> &nbsp; </li> -->
                    </ul>
                </div>
                <!-- END Breadcrumb -->







        <!-- BEGIN Main Content -->
        <div class="row" >
            <div class="col-md-12" >
                
                <!-- Home - Container - Blank - MainContent - menuTile  -->
                

                <!-- BEGIN First Row -->
                <div class="row">
                    
                    <div class="col-md-4  col-md-offset-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tile tile-big3row">
                                    <p class="title">Register Online by QRCode</p>
                                    <hr/>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 tile-active">
                                <a href="#" class="tile tile-red" data-stop="5000">
                                    <div class="img img-center">
                                        <i class="fa fa-camera"></i>
                                    </div>
                                    <p class="title text-center">Conference</p>
                                </a>

                                <div class="tile tile-green" data-stop="2000">
                                    <p class="title">Conference</p>
                                    <p>ประชุมสัมมนา</p>
                                    <div class="img img-bottom">
                                        <i class="fa fa-camera"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 tile-active">
                                <a href="http://google.co.th" class="tile tile-img" style="background-image: url(../../../images/images-flaty_theme/img/mbk/menuTile/menuTile-Event.png);">
                                    <p class="title">Events</p>
                                </a>

                                <div class="tile tile-blue" >
                                    <p class="title">Event</p>
                                    <p>งานกิจกรรมภายในบริษัท MBK</p>
                                    <div class="img img-bottom">
                                        <i class="fa fa-picture-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 tile-active">
                                <a href="#" class="tile tile-magenta" data-stop="5000">
                                    <div class="img img-center">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <p class="title text-center">Training</p>
                                </a>
                                <div class="tile tile-pink" data-stop="2000">
                                    <p class="title">Training</p>
                                    <p>บันทึกการเข้าร่วมอบรม</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                <!--  <a class="tile tile-blue" href="#">
                                    <p class="title">Check out our gallery</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                    <div class="img img-bottom">
                                        <i class="fa fa-picture-o"></i>
                                    </div>
                                </a> -->
                    

                            


         
                        
                    



                </div>
                <!-- END First Row -->

                
      



            </div>
        </div>
        <!-- END Main Content -->


        <!-- <br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br>
        <br><br>
        <br><br><br><br><br><br> -->
        

        <footer>
            <p>Copyright © 2015 MBK. All rights reserved.</p>
        </footer>
        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->

        </div>
        <!-- END Container -->











        <script src="../../../javascripts/javascript-mbk-home.js" type="text/javascript"></script>



    </body>
</html>
