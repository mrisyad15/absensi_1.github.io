<?php
require_once "../config/koneksi.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "SELECT * FROM sekolah where nama_sekolah LIKE '%$q%'";
$rsd = mysqli_query($conn,$sql);
while($rs = mysqli_fetch_array($rsd)) {
	$cname = $rs['nama_sekolah'];
	echo "$cname\n";
}
?>