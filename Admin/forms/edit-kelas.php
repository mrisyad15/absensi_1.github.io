 <form method="POST" action="?edit-kelas">
          <div class="form-group">
              <label class="control-label" for="title">ID Kelas</label>
              <input type="text" name="id" class="form-control" readonly value="<?php echo $row1['id_kelas'];?>">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Nama Kelas</label>
              <input type="text" name="kelas" class="form-control" value="<?php echo $row1['nama_kelas'];?>">
              <div class="help-block with-errors"></div>
          </div>

                           
     <!--  <div class="modal-footer"> -->
         <button type="submit" name="update-kelas" class="btn slider-submit btn-info" id="save">Simpan</button>
       <button type="reset" class="btn btn-default" onclick="history.go(-1)">Keluar</button>
      <!-- </div> -->
      </form>