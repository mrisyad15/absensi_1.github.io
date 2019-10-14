<?php 
include_once '../../config/koneksi.php';
?> 
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
       <form method="POST" action="?insert=insert-siswa" enctype="multipart/form-data">
          <div class="form-group">
              <label class="control-label" for="title">NIS</label>
              <input type="text" name="nis" class="form-control">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Nama Siswa</label>
              <input type="text" name="siswa" class="form-control">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">No Telp</label>
              <input type="number" name="tlpn" class="form-control">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Email</label>
              <input type="email" name="email" class="form-control">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Jenis Kelamin</label>
              <input type="radio" name="jenkel" value="Laki-laki">Laki-laki
              <input type="radio" name="jenkel" value="Perempuan">Perempuan
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

          <div class="form-group">
              <label class="control-label" for="title">Kelas</label>
             <select name="kelas">
               <option>Pilih Kelas</option>
               <?php 
               $kel = mysqli_query($con,"SELECT * FROM kelas");
               while ($kelas = mysqli_fetch_array($kel)) {
                 ?>
                <option value="<?php echo $kelas['id_kelas']; ?>"><?php echo $kelas['nama_kelas']; ?></option>
                <?php } ?>
             </select>
              <div class="help-block with-errors"></div>
          </div>

                           
     <!--  <div class="modal-footer"> -->
         <button type="submit" name="insert-siswa" class="btn slider-submit btn-info" id="save">Simpan</button>
       <button type="reset" class="btn btn-default" onclick="history.go(-1)">Keluar</button>
      <!-- </div> -->
      </form>
   <!--  </div>
  </div>
</div> -->

