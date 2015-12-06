<?php
session_start(); //start session.
?>

<!DOCTYPE html>
<html>
    <head>
        <base href="/mbk/build/src/desktop/Home/EventsManagement/Events/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Events Management</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link href="../../../../../stylesheets/stylesheet-mbk-home-events-management.css" rel="stylesheet" type="text/css" />

        <link rel="shortcut icon" href="../../../../../images/images-flaty_theme/favicon/favicon.ico">
    </head>
    <body>

        <?php

            if(isset($_SESSION['userName']) && $_SESSION['userName'] != "") {
                    //Task to do
            } else {

                 header('Location: ../../../../../Login/index.php'); //redirect URL
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
                        <img class="nav-user-photo" src="../../../../../images/images-flaty_theme/img/demo/avatar/avatar_kapook.jpg" alt="Kapook's Photo" />
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
			
			<!-- Home - EventsManagement - Events - Container - Sidebar  -->
                        <!-- BEGIN Sidebar -->
            <!-- <div id="sidebar" class="navbar-collapse collapse"> -->
            <div id="sidebar" class="navbar-collapse collapse sidebar-fixed">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                    <!-- BEGIN Search Form -->
                    <li>
                        <form target="#" method="GET" class="search-form">
                            <span class="search-pan">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" name="search" placeholder="Search ..." autocomplete="off" />
                            </span>
                        </form>
                    </li>
                    <!-- END Search Form -->

                        <!-- sidebar - Dashboard  -->
                                            <li class="">
                        <a href="../">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                        <!-- sidebar - RMR  -->
                                            <li class="active">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-desktop"></i>
                            <span>Events Manager</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li class="active">
                                <a href="./">Events</a>
                            </li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    
                </ul>
                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
                <div id="sidebar-collapse" class="visible-lg">
                    <i class="fa fa-angle-double-left"></i>
                </div>
                <!-- END Sidebar Collapse Button -->
            </div>
            <!-- END Sidebar -->

            <!-- Home - EventsManagement - Events - Container - Content -->
                <!-- BEGIN Content -->
    <div id="main-content" >


        <!-- Home - EventsManagement - Events - Container - MainContent - PageTitle  -->
                        <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i>   Events Management</h1>
                        <h4>You can start your customization from this one!</h4>
                    </div>
                </div>
                <!-- END Page Title -->


        <!-- Home - EventsManagement - Events - Container - MainContent - breadCrumbs  -->
                        <!-- BEGIN Breadcrumb -->
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="../../">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Events Management
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Events</li>


                    </ul>
                </div>
                <!-- END Breadcrumb -->



        <!-- Home - EventsManagement - Events - Container - Blank - MainContent - eventsTable  -->
        <!-- BEGIN Main Content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
            <h3><i class="fa fa-table"></i> Events</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                
                <!-- Home - EventsManagement - Events - Container - Blank - MainContent - eventsTable - buttonToolbar  -->
                <div class="btn-toolbar pull-right clearfix">
    <div class="btn-group">
        <a class="btn btn-circle show-tooltip" title="Add new record" href="#"><i class="fa fa-plus"></i></a>
        <a class="btn btn-circle show-tooltip" title="Edit selected" href="#"><i class="fa fa-edit"></i></a>
        <a class="btn btn-circle show-tooltip" title="Delete selected" href="#"><i class="fa fa-trash-o"></i></a>
    </div>
    <div class="btn-group">
        <a class="btn btn-circle show-tooltip" title="Print" href="#"><i class="fa fa-print"></i></a>
        <a class="btn btn-circle show-tooltip" title="Export to PDF" href="#"><i class="fa fa-file-text-o"></i></a>
        <a class="btn btn-circle show-tooltip" title="Export to Exel" href="#"><i class="fa fa-table"></i></a>
    </div>
    <div class="btn-group">
        <a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="fa fa-repeat"></i></a>
    </div>
</div>

                <br/><br/>
                <div class="clearfix"></div>
                <div class="table-responsive" style="border:0">
                    <table class="table table-advance" id="table1">

                        <!-- Home - EventsManagement - Events - Container - Blank - MainContent - eventsTable - header  -->
                        <thead>
	<tr>
		<th style="width:18px"><input type="checkbox" /></th>
		<th>Rendering engine</th>
		<th>Browser</th>
		<th>Platform(s)</th>
		<th class="text-center">Engine version</th>
		<th>CSS grade</th>
	</tr>
</thead>
                        
                        <!-- Home - EventsManagement - Events - Container - Blank - MainContent - eventsTable - body  -->
                        <tbody>
    <tr class="table-flag-blue">
        <td><input type="checkbox" /></td>
        <td>Trident</td>
        <td>Internet Explorer 7</td>
        <td>Win XP SP2+</td>
        <td class="text-center">7</td>
        <td><span class="label label-success">A</span></td>
    </tr>
    <tr>
        <td><input type="checkbox" /></td>
        <td>Trident</td>
        <td><a href="#">AOL browser (AOL desktop)</a></td>
        <td>Win XP</td>
        <td class="text-center">6</td>
        <td><span class="label label-success">A</span></td>
    </tr>
    <tr class="table-flag-orange">
        <td><input type="checkbox" /></td>
        <td>Gecko</td>
        <td><span class="label label-success">Not Bad</span> Firefox 1.5</td>
        <td>Win 98+ / OSX.2+</td>
        <td class="text-center">1.8</td>
        <td><span class="label label-success">A</span></td>
    </tr>
    <tr>
        <td><input type="checkbox" /></td>
        <td>Gecko</td>
        <td>Netscape Navigator 9</td>
        <td>Win 98+ / OSX.2+</td>
        <td class="text-center">1.8</td>
        <td><span class="label label-success">A</span></td>
    </tr>
    <tr>
        <td><input type="checkbox" /></td>
        <td>Gecko</td>
        <td>Seamonkey 1.1</td>
        <td>Win 98+ / OSX.2+</td>
        <td class="text-center">1.8</td>
        <td><span class="label label-warning">B</span></td>
    </tr>
    <tr>
        <td><input type="checkbox" /></td>
        <td>Gecko</td>
        <td>Mozilla 1.8</td>
        <td>Win 98+ / OSX.1+</td>
        <td class="text-center">1.8</td>
        <td><span class="label label-success">A</span></td>
    </tr>
    <tr class="table-flag-blue">
        <td><input type="checkbox" /></td>
        <td>Trident</td>
        <td><span class="label label-warning">So crazy!</span> <a href="#">Internet Explorer 6</a></td>
        <td>Win 98+</td>
        <td class="text-center">6</td>
        <td><span class="label label-important">C</span></td>
    </tr>
    <tr class="table-flag-red">
        <td><input type="checkbox" /></td>
        <td>Presto</td>
        <td>Opera 7.5</td>
        <td>Win 95+ / OSX.2+</td>
        <td class="text-center">-</td>
        <td><span class="label label-success">A</span></td>
    </tr>
    <tr class="table-flag-red">
        <td><input type="checkbox" /></td>
        <td>Presto</td>
        <td><span class="label label-info">It's Opera!</span> Opera 8.0</td>
        <td>Win 95+ / OSX.2+</td>
        <td class="text-center">-</td>
        <td><span class="label label-success">A</span></td>
    </tr>
    <tr>
        <td><input type="checkbox" /></td>
        <td>Gecko</td>
        <td><a href="#">Mozilla 1.0</a></td>
        <td>Win 95+ / OSX.1+</td>
        <td class="text-center">1</td>
        <td><span class="label label-warning">B</span></td>
    </tr>
    <tr>
        <td><input type="checkbox" /></td>
        <td>Gecko</td>
        <td>Mozilla 1.1</td>
        <td>Win 95+ / OSX.1+</td>
        <td class="text-center">1.1</td>
        <td><span class="label label-success">A</span></td>
    </tr>
    <tr class="table-flag-blue">
        <td><input type="checkbox" /></td>
        <td>Misc</td>
        <td>IE Mobile</td>
        <td>Windows Mobile 6</td>
        <td class="text-center">-</td>
        <td><span class="label label-important">C</span></td>
    </tr>
    <tr>
        <td><input type="checkbox" /></td>
        <td>Gecko</td>
        <td><a href="#">Mozilla 1.2</a></td>
        <td>Win 95+ / OSX.1+</td>
        <td class="text-center">1</td>
        <td><span class="label label-warning">B</span></td>
    </tr>
    <tr class="table-flag-red">
        <td><input type="checkbox" /></td>
        <td>Presto</td>
        <td>Opera 7.7</td>
        <td>Win 95+ / OSX.2+</td>
        <td class="text-center">-</td>
        <td><span class="label label-success">A</span></td>
    </tr>
    <tr>
        <td><input type="checkbox" /></td>
        <td>Gecko</td>
        <td>Mozilla 1.7</td>
        <td>Win 98+ / OSX.1+</td>
        <td class="text-center">1.8</td>
        <td><span class="label label-success">A</span></td>
    </tr>
</tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
                <!-- END Main Content -->
        
        

        <footer>
            <p>Copyright © 2015 MBK. All rights reserved.</p>
        </footer>
        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->

        </div>
        <!-- END Container -->











        <script src="../../../../../javascripts/javascript-mbk-home-events-management.js" type="text/javascript"></script>



    </body>
</html>
