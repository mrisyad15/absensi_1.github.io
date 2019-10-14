<?php 
include_once('config/koneksi.php');
if (isset($_POST['insert-sekolah'])) {
  $sekolah    = htmlspecialchars($_POST['sekolah']);
  $tlpn     = htmlspecialchars($_POST['tlpn']);
  $alamat     = htmlspecialchars($_POST['alamat']);
  $foto     = $_FILES['foto']['name'];
  move_uploaded_file($_FILES['foto']['tmp_name'], "Admin/sekolah/".$foto);
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);
  if ($_POST['password'] != $_POST['retype']) {
      echo "<script>alert('Your password is not valid');</script>
        <meta http-equiv='refresh' content='0;URL=?register'>"; 
              }
  else {
      $insertsekolah  = "INSERT INTO sekolah VALUES ('','$sekolah','$tlpn','$alamat','$foto','$username')";
      $insertlogin = "INSERT INTO login VALUES('$username','$password','Sekolah')";
      $insertsekolah2 = mysqli_query($con,$insertsekolah);
      $insertlogin2 = mysqli_query($con,$insertlogin);
      echo "<script>alert('Berhasil horee');</script>
        <meta http-equiv='refresh' content='0;URL=?register'>";
            }
 } ?>