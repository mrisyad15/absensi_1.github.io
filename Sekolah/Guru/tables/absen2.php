<?php include_once('../../config/koneksi.php'); ?>
<div class="module">
	<div class="module-head">
		<h3>Data Absen</h3>&nbsp;
	</div>
	<a href="?page=absen" class="btn btn-info">All Students</a>
                                     <?php
                                    $sk=$con->query("SELECT * FROM kelas ORDER BY nama_kelas ASC"); 
                                    while($rk=$sk->fetch_array()){ ?>
                                        <a href="?page=absen2&id_kelas=<?php echo $rk['id_kelas']; ?>" class="btn btn-info"><?php echo $rk['nama_kelas']; ?></a>
                                    <?php } ?>
	<div class="module-body table">
	<div class="">
		<table class="datatable-1 table table-bordered table-striped	 display" width="100%">
			<thead>
				<tr>
					<th>NIS</th>
					<th>Nama Siswa </th>
					<th>Kelas</th>
					<th>Jam Masuk</th>
					<th>Keterangan</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>	
				<?php 
				  $tgl_absen  = date('Y-m-d');
					$id=$_GET['id_kelas'];
                    $kelas = mysqli_query($con, "SELECT * FROM absen JOIN siswa ON absen.nis = siswa.nis JOIN kelas k ON siswa.id_kelas = k.id_kelas WHERE siswa.id_kelas='$id' AND tgl_absen = '$tgl_absen' GROUP BY siswa.nis");
                    while ($row = mysqli_fetch_array($kelas)) {
                ?>
                <tr>
                    <td><?php echo $row['nis']; ?></td>
                    <td><?php  echo $row['nama_siswa']; ?></td>
                    <td><?php  echo $row['nama_kelas']; ?></td>
                    <td><?php  echo $row['jam_masuk'] ?></td>
                    <td><?php  echo $row['keterangan'] ?></td>
                    <td><?php  echo $row['status'] ?></td>
                 <?php } ?>
                </tr>	
			</tbody>
			
		</table>
	</div>
	</div>
</div><!--/.module-->