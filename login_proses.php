<?php
include_once('config/koneksi.php');

if(isset($_POST['login'])){
$user =$_POST['username'];
$pass =$_POST['password'];

//MENCARI USERNAME DAN PASSWORD

$cari=mysqli_query($con,"SELECT * FROM login WHERE username='$user' AND password='$pass'");
$ketemu = mysqli_num_rows($cari);
if($ketemu > 0) 

{
	$row= mysqli_fetch_array($cari);

	//ATUR SESSION
	session_start();
		//VARIABEL SESI = DARI FIELD DATABASE

	$_SESSION['username']=$row['username'];
	$_SESSION['password']=$row['password'];
	$_SESSION['Level']=$row['level'];

	if($_SESSION['Level']=='admin'){
			
	echo " <script>
						alert('Selamat Datang di Admin AbsiLee');
						document.location='Admin/layoutadmin.php';
		   </script> ";	

	}else if($_SESSION['Level']=='Sekolah'){
		$skl=mysqli_query($con,"SELECT * FROM sekolah WHERE username='$row[username]'")->fetch_assoc();
		$_SESSION['sekolah']=$skl['nama_sekolah'];
		$_SESSION['logo']=$skl['foto'];
		$_SESSION['id']=$skl['id_sekolah'];
		echo " <script>
						alert('Selamat Datang Di absensi AbsiLee');
						document.location='Sekolah/layoutsekolah.php';
		   </script> ";
	}
}

		
else{

	echo " <script>
						alert('Username atau Password salah');
						document.location='index.php';
						
		   </script> ";
	
			
}
}
	
?>

