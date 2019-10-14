<?php session_start();
session_destroy();
	echo "	<script>
				alert('Anda Keluar Dari Web Kami');
				document.location='index.php';
			</script>";

 			?>