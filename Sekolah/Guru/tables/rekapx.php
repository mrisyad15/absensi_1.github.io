<?php include_once('../../config/koneksi.php'); ?>
<div class="module">
	<div class="module-head">
		<h3>Data Absen</h3>&nbsp;
		<form method="POST" action="?tampil=<?php echo $_GET['id_kelas']; ?>">
		<div class="form-group">
                          <div class="bootstrap-iso">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                  <label>Dari</label><br>
                              		<div class="input-prepend">
										<span class="add-on"> <i class="menu-icon icon-calendar"></i></span><input class="span8" type="date" name="dari" id="dari" placeholder="DD/MM/YYYY" style="width: 20%;">       
									</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                       <div class="form-group">
                          <div class="bootstrap-iso">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                  <label>Sampai</label><br>
                                  <div class="input-prepend">
                                  <span class="add-on"> <i class="menu-icon icon-calendar"></i></span><input class="span8" type="date" name="sampai" id="sampai" placeholder="DD/MM/YYYY" style="width: 20%;">       
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <input type="submit" name="tampil" value="Tampilkan" class=" btn btn-info">
                        </form>
	</div>
	<div class="module-body table">
	<div class="">
		<table class="datatable-1 table table-bordered table-striped	 display" width="100%">
			<thead>
				<tr>
					<th>NIS</th>
					<th>Nama Siswa </th>
					<th>Kelas</th>
					<th>Sakit</th>
					<th>Izin</th>
					<th>Alfa</th>
					<th>Terlambat</th>
					<th>Tahun Ajaran</th>
					
				</tr>
			</thead>
			<tbody>	
				<?php 
					$id=$_GET['id_kelas'];
                    $sql = "SELECT * FROM absen JOIN siswa ON absen.nis = siswa.nis JOIN kelas k ON siswa.id_kelas = k.id_kelas WHERE siswa.id_kelas='$id' GROUP BY siswa.nis";
                    $kelas = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($kelas)) {
                ?>
                <tr>
                    <td><?php echo $row['nis']; ?></td>
                    <td><?php  echo $row['nama_siswa']; ?></td>
                    <td><?php  echo $row['nama_kelas']; ?></td>
                     <?php $sakit = mysqli_query($con,"SELECT COUNT(*) AS sakit FROM absen WHERE keterangan = 'Sakit' AND nis = '$row[nis]'")->fetch_array();?>
                    <td><?php  echo $sakit['sakit'] ?></td>
                    <?php $izin = mysqli_query($con,"SELECT COUNT(*) AS izin FROM absen WHERE keterangan = 'Izin' AND nis = '$row[nis]'")->fetch_array();?>
                    <td><?php  echo $izin['izin'] ?></td>
                     <?php $alfa = mysqli_query($con,"SELECT COUNT(*) AS alfa FROM absen WHERE keterangan = 'Alfa' AND nis = '$row[nis]'")->fetch_array();?>
                    <td><?php  echo $alfa['alfa'] ?></td>
                     <?php $terlambat = mysqli_query($con,"SELECT COUNT(*) AS terlambat FROM absen WHERE status = 'Terlambat' AND nis = '$row[nis]'")->fetch_array();?>
                    <td><?php  echo $terlambat['terlambat']; ?></td>
                    <td><?php  echo $row['tahun_ajaran']; ?></td>
                   
                 <?php } ?>
                </tr>	
			</tbody>
			
		</table>
	</div>
	</div>
</div><!--/.module-->