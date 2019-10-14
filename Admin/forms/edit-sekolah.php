<?php 
include_once '../config/koneksi.php'; ?>
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
       <form method="POST" action="?edit-sekolah" enctype="multipart/form-data">
          <div class="form-group">
              <label class="control-label" for="title">ID Sekolah</label>
              <input type="text" name="id" class="form-control" readonly value="<?php echo $row2['id_sekolah']?>">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Nama Sekolah</label>
              <input type="text" name="sekolah" value="<?php echo $row2['nama_sekolah']?>" class="form-control">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">No Telp</label>
              <input type="number" name="tlpn" class="form-control" value="<?php echo $row2['no_telp']?>">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Alamat</label>
             <textarea name="alamat" class="form-control" value="<?php echo $row2['nama_sekolah']?>"><?php echo $row2['alamat']?></textarea>
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Foto</label>
               <img src="<?php echo "sekolah/".$row2['foto'];?>" style="width:100px"><br><?php echo $row2['foto']; ?><br>
              <input type="file" name="foto" class="form-control" value="<?php echo $row2['foto']?>" required>
              <div class="help-block with-errors"></div>
          </div>

                           
     <!--  <div class="modal-footer"> -->
         <button type="submit" name="update-sekolah" class="btn slider-submit btn-info" id="save">Simpan</button>
       <button type="reset" class="btn btn-default" onclick="history.go(-1)">Keluar</button>
      <!-- </div> -->
      </form>
   <!--  </div>
  </div>
</div> -->

