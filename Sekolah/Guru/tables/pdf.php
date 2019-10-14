<?php
include ('../../config/koneksi.php');
include('../../admin/assets/fpdf16/fpdf.php');
if (isset($_POST['tampilkan'])) {
//Menampilkan data dari tabel di database

$dari   =   $_POST['dari'];
$sampai =   $_POST['sampai'];
$result =   mysqli_query($con,"SELECT
  *
FROM
  `absen`
  INNER JOIN `siswa` ON `siswa`.`nis` = `absen`.`nis`
  INNER JOIN `kelas` ON `kelas`.`id_kelas` = `siswa`.`id_kelas` WHERE (tgl_absen) BETWEEN '$dari' AND '$sampai'");

//Inisiasi untuk membuat header kolom
$column_nis = "";
$column_nama_siswa = "";
$column_sakit = "";
$column_izin = "";
$column_alfa = "";
$column_terlambat = "";
$column_tahun_ajaran= "";
// $cek=mysqli_num_rows($result);
// if($cek < 1){
//     echo "<script>alert('Tanggal Cetak Harus Diisi'); location='rekapx.php'</script>";
// }
// else{
//For each row, add the field to the corresponding column
while ($row = mysqli_fetch_array($result))
{

if ($row['keterangan'] == 'Sakit') {
    $sakit = mysqli_query($con,"SELECT COUNT(*) AS sakit from absen WHERE keterangan = 'Sakit'");
}else if($row['keterangan'] == 'Izin'){
    $izin = mysqli_query($con,"SELECT COUNT(*) AS izin from absen WHERE keterangan = 'Izin'");
}
    $nis = $row["nis"];
    $nama = $row["nama_siswa"];
    $sakit = $row["keterangan"];
    $izin = $row["keterangan"];
    $alfa = $row["keterangan"];
    $terlambat = $row["status"];
    $tahun_ajaran = $row["tahun_ajaran"];
   
 
    

    $column_nis = $column_nis.$nis."\n";
    $column_nama_siswa = $column_nama_siswa.$nama."\n";
    $column_sakit = $column_sakit.$sakit."\n";
    $column_izin = $column_izin.$izin."\n";
    $column_alfa = $column_alfa.$alfa."\n";
    $column_terlambat = $column_terlambat.$terlambat."\n";
    $column_tahun_ajaran = $column_tahun_ajaran.$tahun_ajaran."\n";
   
    

//Create a new PDF file
$pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
$pdf->Image('Logo.jpg',25,13,20);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(80);
$pdf->Cell(30,10,'Data Karyawan Baru',0,0,'C');
$pdf->Ln();
$pdf->Cell(80);
$pdf->Cell(30,10,'SIT Nurul Fikri',0,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80);
$pdf->Cell(30,10,'Jln. Situ Indah No. 116 Cimanggis',0,0,'C');
$pdf->Ln();

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20);
$pdf->Cell(270,-70,"Periode: $dari s/d $sampai",0,0,'C');
$pdf->Ln();
date_default_timezone_set("Asia/Jakarta");
$date = date( 'd-m-Y, H:i:s');
$pdf->Cell(20);
$pdf->Cell(270,80,"Dicetak tanggal: $date ",0,0,'C');
$pdf->Ln();
}

//Fields Name position
$Y_Fields_Name_position = 45;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(25,8,'Nis',1,0,'C',1);
$pdf->SetX(30);
$pdf->Cell(40,8,'Nama',1,0,'C',1);
$pdf->SetX(70);
$pdf->Cell(25,8,'Sakit',1,0,'C',1);
$pdf->SetX(95);
$pdf->Cell(25,8,'Alfa',1,0,'C',1);
$pdf->SetX(120);
$pdf->Cell(50,8,'Terlambat',1,0,'C',1);
$pdf->SetX(170);
$pdf->Cell(35,8,'Tahun Ajaran',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 53;

//Now show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(25,6,$column_nis,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(30);
$pdf->MultiCell(40,6,$column_nama_siswa,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(70);
$pdf->MultiCell(25,6,$column_sakit,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(95);
$pdf->MultiCell(25,6,$column_izin,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(120);
$pdf->MultiCell(50,6,$column_alfa,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(95);
$pdf->MultiCell(25,6,$column_terlambat,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(170);
$pdf->MultiCell(35,6,$column_tahun_ajaran,1,'C');

$pdf->Output();

// }
}
?>