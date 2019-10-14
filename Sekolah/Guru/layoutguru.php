<?php
session_start();
include_once('../../config/koneksi.php');?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Absensi Siswa</title>
        <link type="text/css" href="../../Admin/assets/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="../../Admin/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="../../Admin/assets/css/theme.css" rel="stylesheet">
        <link type="text/css" href="../../Admin/assets/img/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href="../../Admin/assets/css/jquery.autocomplete.css" rel="stylesheet">
        <link href="../../Admin/assets/img/iconsekolah.png" rel="shortcut icon">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <link rel="stylesheet" type="text/css" href="../../Admin/assets/css/bootstrap-datepicker.min.css">
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php"> <img src="../../admin/sekolah/<?php echo $_SESSION['logo']; ?>" style="width:80px">&nbsp;<?php echo $_SESSION['sekolah']; ?></a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <br><br><img src="../../admin/assets/img/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
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
        <script src="../../Admin/assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="../../Admin/assets/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="../../Admin/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../Admin/assets/js/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="../../Admin/assets/js/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="../../Admin/assets/js/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../Admin/assets/js/common.js" type="text/javascript"></script>
        <script src="../../Admin/assets/js/jquery.autocomplete.js" type="text/javascript"></script>
        <script src="../../Admin/assets/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../../Admin/assets/js/bootstrap-datepicker.js"></script>
        

        <script>
/*autocomplete muncul setelah user mengetikan minimal2 karakter */
    $(function() { 
        $( "#kelas" ).autocomplete({
         source: "core/kelas.php", 
           minLength:1,
        });
    });
    </script>
    <script>
        $(document).ready(function(){
            $('#select_all').on('click',function(){
                if(this.checked){
                    $('.checkbox').each(function(){
                        this.checked = true;
                    });
                }else{
                    $('.checkbox').each(function(){
                        this.checked = false;
                    });
                }
            });

        $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#select_all').prop('checked',true);
            }else{
                $('#select_all').prop('checked',false);
            }
        });
    });
    </script>
    <script>
         $(document).ready(function(){
            var date_input=$('input[name="dari"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'yyyy/mm/dd',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>
     <script>
         $(document).ready(function(){
            var date_input=$('input[name="sampai"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'yyyy/mm/dd',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>   
    </body>
