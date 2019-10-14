<?php include_once('../config/koneksi.php');
if (isset($_GET['edit-kelas'])) {
	$id    = $_GET['edit-kelas'];
	$kelas = mysqli_query($con,"SELECT * FROM kelas WHERE id_kelas = '$id'");
	$row1  = mysqli_fetch_array($kelas);
	if (isset($_POST['update-kelas'])) {
	$id 		= htmlspecialchars($_POST['id']);
 	$kelas 		= htmlspecialchars($_POST['kelas']);
 	$editkelas = mysqli_query($con,"UPDATE kelas SET nama_kelas = '$kelas', id_sekolah = '' WHERE id_kelas = '$id'");
 	if ($editkelas) {
 		echo "<script>alert('Data berhasil diedit');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-kelas'>";
 	}else{
 		echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-kelas'>";
 	}
  }	
 }

else if (isset($_GET['edit-sekolah'])) {
	$id    = $_GET['edit-sekolah'];
	$sekolah = mysqli_query($con,"SELECT * FROM sekolah WHERE id_sekolah = '$id'");
	$row2  = mysqli_fetch_array($sekolah);
	if (isset($_POST['update-sekolah'])) {
	$id 			= htmlspecialchars($_POST['id']);
 	$sekolah 		= htmlspecialchars($_POST['sekolah']);
 	$tlpn			= htmlspecialchars($_POST['alamat']);
 	$alamat			= htmlspecialchars($_POST['foto']);
 	$foto			= $_FILES['foto']['name'];
 	move_uploaded_file($_FILES['foto']['tmp_name'], "sekolah/".$foto);
 	$editsekolah 	= mysqli_query($con,"UPDATE sekolah SET nama_sekolah = '$sekolah', no_telp = '$tlpn', alamat = '$alamat', foto = '$foto' WHERE id_sekolah = '$id'");
 	if ($editsekolah) {
 		echo "<script>alert('Data berhasil diedit');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-sekolah'>";
 	}else{
 		echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-sekolah'>";
 	}
  }	
 } 

else if (isset($_GET['edit-siswa'])) {
	$nis    = $_GET['edit-siswa'];
	$siswa = mysqli_query($con,"SELECT * FROM siswa WHERE nis = '$nis'");
	$row3  = mysqli_fetch_array($siswa);
	if (isset($_POST['update-siswa'])) {
	$nis 			= htmlspecialchars($_POST['nis']);
 	$siswa 		= htmlspecialchars($_POST['siswa']);
 	$tlpn 			= htmlspecialchars($_POST['tlpn']);
 	$alamat			= htmlspecialchars($_POST['alamat']);
 	$email 			= htmlspecialchars($_POST['email']);
 	$alamat			= htmlspecialchars($_POST['foto']);
 	$foto			= $_FILES['foto']['name'];
 	move_uploaded_file($_FILES['foto']['tmp_name'], "siswa/".$foto);
 	$editsekolah 	= mysqli_query($con,"UPDATE siswa SET nama_siswa = '$siswa', no_telp = '$tlpn', email = '$email', alamat = '$alamat', foto = '$foto', jenis_kelamin = '', id_kelas = '' WHERE nis = '$nis'");
 	if ($editsekolah) {
 		echo "<script>alert('Data berhasil diedit');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-siswa'>";
 	}else{
 		echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-siswa'>";
 	}
  }	
 } 
  ?>