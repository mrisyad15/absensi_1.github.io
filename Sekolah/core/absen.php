<?php include_once('../config/koneksi.php');
if (isset($_POST['absen'])) {
 	$nis 		= htmlspecialchars($_POST['nis']);

 	$data 		= mysqli_query($con,"SELECT * FROM siswa WHERE nis = '$nis'");
 	$data2 		= mysqli_num_rows($data);
 	if($data2 > 0){	
 		$tgl_absen 	= date('Y-m-d');
 		$cek = $con->query("SELECT * FROM absen WHERE nis = '$nis' AND tgl_absen = '$tgl_absen'");
 		if(mysqli_num_rows($cek) > 0){
 			echo "<script>alert('Maaf anda sudah absen hari ini');</script>
							<meta http-equiv='refresh' content='0;URL=?absensi'>";
 		}
 		else{
 			$tgl_absen 	= date('Y-m-d');
		 	// $jam_masuk	= date('H:i:s');
		 	$keterangan = $_POST['absen'];
		 	if ($_POST['absen'] = 'Hadir') {
		 		$jam_masuk	= date('H:i:s');
		 	}else{
		 		$jam_masuk = '00:00:00';
		 	}
		 	//$jam_pulang	= ;

		 	
		 	if($jam_masuk > '07:00:00'){
		 		$status		= "Terlambat";
		 	}
		 	else{
		 		$status = "Tepat Waktu";
		 	}
		 	$ta = date('Y')+1;
		 	$tahun = date('Y').'/'.$ta;
		 	$absen= mysqli_query($con,"INSERT INTO absen VALUES (null, '$nis','$tgl_absen', '$jam_masuk', '', '$status', '$keterangan', '$tahun') ");
		 	
		 	// Kirim email
		 	$email = $con->query("SELECT * FROM absen WHERE nis = '$nis'")->fetch_array($email);
		 	$to 	= $email['email'];
			$judul 	= "Informasi Absen";
			// $sender   = 'nanabhtyr24@gmail.com';
			// $password = 'sepatubarubeli';
			$dari	= "From: smki-utama@smki-gratis.sch.id \n";
			$dari	.= "Content-type: text/html \r\n";

			$pesan	= "Hari ini anda telah absen";

			$kirim	= mail($to, $judul, $pesan, $dari);

			 	if ($absen) {
			 		echo "<script>alert('Anda berhasil absen');</script>
							<meta http-equiv='refresh' content='0;URL=?page=data-kelas'>";
			 	}
			 	else{
			 		echo "<script>alert('Gagal mengabsen');</script>
							<meta http-equiv='refresh' content='0;URL=?absensi'>";
		 		}

 		}

	}

	 	else{
	 		echo "<script>alert('Nis tidak terdaftar');</script>
						<meta http-equiv='refresh' content='0;URL=?absensi'>";
	 	}
}