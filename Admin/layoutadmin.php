<?php include_once('../config/koneksi.php');?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Absensi Siswa</title>
        <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="assets/css/theme.css" rel="stylesheet">
        <link type="text/css" href="assets/img/icons/css/font-awesome.css" rel="stylesheet">
         <link type="text/css" href="assets/css/jquery.autocomplete.css" rel="stylesheet">
        <link href="assets/img/iconsekolah.png" rel="shortcut icon">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php"> <img src="assets/img/iconsekolah.png" style="width:80px">&nbsp;AbsiLee</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="assets/img/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            
                            
                            <!-- menu --><?php include('menu/menu.php'); ?>
                           
                           
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <?php   include('isi.php'); ?>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2017 Lele - </b>All rights reserved.
            </div>
        </div>
        <script src="assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="assets/js/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="assets/js/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="assets/js/common.js" type="text/javascript"></script>
        <script src="assets/js/jquery.autocomplete.js" type="text/javascript"></script>
        <script>
            $().ready(function() {
    $("#sekolah").autocomplete("core/getsekolah.php", {
        width: 260,
        matchContains: true,
        //mustMatch: true,
        //minChars: 0,
        //multiple: true,
        //highlight: false,
        //multipleSeparator: ",",
        selectFirst: false
    });
});
        </script>
    </body>
