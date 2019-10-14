<?php
//connect ke database
include_once '../../../config/config.php';
//harus selalu gunakan variabel term saat memakai autocomplete,
//jika variable term tidak bisa, gunakan variabel q
$term = trim(strip_tags($_GET['term']));
  
$qstring = "SELECT * FROM kelas WHERE nama_kelas LIKE '".$term."%'";
//query database untuk mengecek tabel anime
$result = mysqli_query($conn, $qstring);
  
while ($row = $result->fetch_array())
{
    $row['value']=htmlentities(stripslashes($row['nama_kelas']));
    $row['id_kelas']=(int)$row['id_kelas'];
//buat array yang nantinya akan di konversi ke json
    $row_set[] = $row;
}
//data hasil query yang dikirim kembali dalam format json
echo json_encode($row_set);
?>