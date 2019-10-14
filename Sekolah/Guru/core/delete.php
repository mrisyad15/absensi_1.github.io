<?php include('../../config/koneksi.php');
if (isset($_GET['delete-kelas'])) {
 $id = $_GET['delete-kelas'];
 $delkelas = mysqli_query($con,"DELETE FROM kelas WHERE id_kelas = '$id'");
 if ($delkelas) {
 		echo "<script>alert('Data berhasil dihapus');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-kelas'>";
 	}else{
 		echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-kelas'>";
 	}
 }

 else if (isset($_GET['delete-sekolah'])) {
 $id = $_GET['delete-sekolah'];
 $delsekolah = mysqli_query($con,"DELETE FROM sekolah WHERE id_sekolah = '$id'");
 if ($delsekolah) {
 		echo "<script>alert('Data berhasil dihapus');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-sekolah'>";
 	}else{
 		echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-sekolah'>";
 	}
 }

 else if (isset($_GET['delete-siswa'])) {
 $nis = $_GET['delete-siswa'];
 $delsiswa = mysqli_query($con,"DELETE FROM siswa WHERE nis = '$nis'");
 if ($delsiswa) {
 		echo "<script>alert('Data berhasil dihapus');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-siswa'>";
 	}else{
 		echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?page=data-siswa'>";
 	}
 }
  ?>