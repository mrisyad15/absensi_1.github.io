<?php 	
if (isset($_GET['login'])) {
	include_once('forms/login.php');
	include_once('login_proses.php');
 }
else if (isset($_GET['absensi'])) {
	include_once('forms/absensi.php');
	include_once('core/absen.php');
 }
 else{
 	include_once('forms/absensi.php');
 	} ?>