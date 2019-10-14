       <form method="POST" action="?edit-siswa" enctype="multipart/form-data">
          <div class="form-group">
              <label class="control-label" for="title">NIS</label>
              <input type="text" name="nis" class="form-control" value="<?php echo $row3['nis']?>">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Nama Siswa</label>
              <input type="text" name="siswa" class="form-control" value="<?php echo $row3['nama_siswa']?>">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">No Telp</label>
              <input type="number" name="tlpn" class="form-control" value="<?php echo $row3['no_telp']?>">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Email</label>
              <input type="email" name="email" class="form-control" value="<?php echo $row3['email']?>">
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
             <textarea name="alamat" class="form-control" value="<?php echo $row3['alamat']?>"><?php echo $row3['alamat']?></textarea>
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Foto</label>
              <input type="file" name="foto" class="form-control" required>
              <div class="help-block with-errors"></div>
          </div>

                           
     <!--  <div class="modal-footer"> -->
         <button type="submit" name="update-siswa" class="btn slider-submit btn-info" id="save">Simpan</button>
       <button type="reset" class="btn btn-default" onclick="history.go(-1)">Keluar</button>
      <!-- </div> -->
      </form>
   <!--  </div>
  </div>
</div> -->

