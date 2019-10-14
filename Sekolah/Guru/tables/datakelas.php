<?php include_once('../../config/koneksi.php'); ?>
<div class="module">
	<div class="module-head">
		<h3>Data Kelas</h3>
	</div>
	<div class="module-body table">
	<div class="">
	  <a href="?add=add-kelas" class="btn btn-info" >Add</a><br><br>
		<table class="datatable-1 table table-bordered table-striped	 display" width="100%">
			<thead>
				<tr>
					<th>ID Kelas</th>
					<th>Nama Kelas</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>	
				<?php 
                    $kelas = mysqli_query($con,"SELECT * FROM kelas order by nama_kelas ASC");
                    while ($row = mysqli_fetch_array($kelas)) {
                ?>
                <tr>
                    <td><?php echo $row['id_kelas']; ?></td>
                    <td><?php  echo $row['nama_kelas']; ?></td>
                    <td><a href="?edit-kelas=<?php echo $row['id_kelas'];?>" class="btn btn-info"><i class="menu-icon icon-pencil"></i></a>
                    	<a href="?delete-kelas=<?php echo $row['id_kelas'];?>" class="btn btn-info" onclick="return-confirm('Yakin ?')"><i class="menu-icon icon-trash"></i></a></td>
                 <?php } ?>
                </tr>	
			</tbody>
			
		</table>
	</div>
	</div>
</div><!--/.module-->