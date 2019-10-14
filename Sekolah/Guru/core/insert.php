<?php include_once('../../config/koneksi.php');
if (isset($_POST['insert-kelas'])) {
 	$kelas 		= htmlspecialchars($_POST['kelas']);
 	$insertkelas = mysqli_query($con,"INSERT INTO kelas VALUES (null,'$kelas','') ");
 	if ($insertkelas) {
 		echo "<script>alert('Data berhasil disimpan');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-kelas'>";
 	}else{
 		echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-kelas'>";
 	}
 }

else if (isset($_POST['insert-sekolah'])) {
 	$sekolah 		= htmlspecialchars($_POST['sekolah']);
 	$tlpn			= htmlspecialchars($_POST['tlpn']);
 	$alamat			= htmlspecialchars($_POST['alamat']);
 	$foto			= $_FILES['foto']['name'];
 	move_uploaded_file($_FILES['foto']['tmp_name'], "sekolah/".$foto);
 	$insertsekolah 	= "INSERT INTO sekolah VALUES (NULL,'$sekolah','$tlpn','$alamat','$foto')";
	$insertsekolah2 = mysqli_query($con,$insertsekolah);
 	if ($insertsekolah2) {
 		echo "<script>alert('Data berhasil disimpan');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-sekolah'>";
 	}else{
 		echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-sekolah'>";
 	}
 }

 else if (isset($_POST['insert-siswa'])) {
 	$nis 			= htmlspecialchars($_POST['nis']);
 	$siswa 			= htmlspecialchars($_POST['siswa']);
 	$tlpn			= htmlspecialchars($_POST['tlpn']);
 	$alamat			= htmlspecialchars($_POST['alamat']);
 	$jenkel			= htmlspecialchars($_POST['jenkel']);
 	$email			= htmlspecialchars($_POST['email']);
 	$kelas 			= htmlspecialchars($_POST['kelas']);
 	$foto			= $_FILES['foto']['name'];
 	move_uploaded_file($_FILES['foto']['tmp_name'], "../../admin/siswa/".$foto);
 	$insertsiswa 	= "INSERT INTO siswa VALUES ('$nis','$siswa','$tlpn','$email','$alamat','$foto','$jenkel','$kelas')";
	$insertsiswa2 = mysqli_query($con,$insertsiswa);
 	if ($insertsiswa2) {
 		echo "<script>alert('Data berhasil disimpan');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-siswa'>";
 	}else{
 		echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-siswa'>";
 	}
 }
   ?>