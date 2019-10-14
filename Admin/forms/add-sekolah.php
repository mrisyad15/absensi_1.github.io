<?php 
include_once '../config/koneksi.php';
$carikode = mysqli_query($con,"SELECT id_sekolah from sekolah") or die (mysqli_error());
$datakode = mysqli_fetch_array($carikode);
$jumlah_data = mysqli_num_rows($carikode);
if ($datakode) {
   $nilaikode = substr($jumlah_data[0], 1);
   $kode = (int) $nilaikode;
   $kode = $jumlah_data +1;
   $kode_otomatis = "S".str_pad($kode, 3, "0",STR_PAD_LEFT);
 }else{
  $kode_otomatis = "S001";
 } ?> 
<!-- Modal -->
<!-- <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"> -->

    <!-- Modal content-->
   <!--  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Form Sewa</h4>
      </div>
      <div class="modal-body"> -->
       <form method="POST" action="?insert=insert-sekolah" enctype="multipart/form-data">
          <div class="form-group">
              <label class="control-label" for="title">ID Sekolah</label>
              <input type="text" name="id" class="form-control" readonly value="<?php echo $kode_otomatis?>">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Nama Sekolah</label>
              <input type="text" name="sekolah" class="form-control">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">No Telp</label>
              <input type="number" name="tlpn" class="form-control">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Alamat</label>
             <textarea name="alamat" class="form-control"></textarea>
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Foto</label>
              <input type="file" name="foto" class="form-control" required>
              <div class="help-block with-errors"></div>
          </div>

                           
     <!--  <div class="modal-footer"> -->
         <button type="submit" name="insert-sekolah" class="btn slider-submit btn-info" id="save">Simpan</button>
       <button type="reset" class="btn btn-default" onclick="history.go(-1)">Keluar</button>
      <!-- </div> -->
      </form>
   <!--  </div>
  </div>
</div> -->

