<?php 	
if (isset($_GET['login'])) {
	include_once('forms/login.php');
	include_once('login_proses.php');
 }
 else if (isset($_GET['register'])) {
	include_once('forms/add-sekolah.php');
 }
 else if (isset($_GET['insert-sekolah'])){
 	include_once('forms/insert.php');
}
 else{
 	include_once('article/article.php');
 	} ?>