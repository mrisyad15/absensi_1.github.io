<?php
 session_start();
 if (!isset($_SESSION['username'])) {
      echo "<script>alert('Login dulu ya');
    document.location='../index.php';</script>";
  }
  include('../config/koneksi.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Absile</title>
	<link type="text/css" href="../Admin/assets/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="../Admin/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="../Admin/assets/css/theme.css" rel="stylesheet">
	<link type="text/css" href="../Admin/assets/img/icons/css/font-awesome.css" rel="stylesheet">
	<link href="../Admin/assets/img/iconsekolah.png" rel="shortcut icon">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>
				<?php 	
				$nampil = mysqli_query($con,"SELECT * FROM sekolah WHERE username = '".$_SESSION['username']."'");
				$a = mysqli_fetch_array($nampil);
					 ?>
			  	<a class="brand" href="layoutsekolah.php"><img style="width:80px" src="<?php echo '../admin/sekolah/'.$a['foto'];?>" >&nbsp;<?php echo $_SESSION['username']; ?>
			  	</a>
				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="?login">
							Log In
						</a></li>

						

						<li><a href="?absensi">
							Absensi
						</a></li>

						<li><a href="../logout.php">
							Log out
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<center><h2>Absensi <?php echo $_SESSION['username']; ?></h2></center>
				<?php include_once 'isi.php'; ?>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2017 Lele - </b>All rights reserved.
		</div>
	</div>
	<script src="../Admin/assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="../Admin/assets/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="../Admin/assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>