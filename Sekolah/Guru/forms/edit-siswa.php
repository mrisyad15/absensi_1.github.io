       <form method="POST" action="?edit-siswa" enctype="multipart/form-data">
          <div class="form-group">
              <label class="control-label" for="title">NIS</label>
              <input type="text" name="nis" class="form-control" readonly value="<?php echo $row3['nis']?>">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Nama Siswa</label>
              <input type="text" name="siswa" class="form-control" value="<?php echo $row3['nama_siswa']?>">
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">No Telp</label>
              <input type="number" name="tlpn" class="form-control" value="<?php echo $row3['no_tlp']?>">
              <div class="help-block with-errors"></div>
          </div>

           <div class="form-group">
              <label class="control-label" for="title">Kelas</label>
             <select name="kelas">
               <option value="<?php echo $row3['id_kelas'] ?>"><?php echo $row3['nama_kelas'] ?></option>
               <?php 
               $kel = mysqli_query($con,"SELECT * FROM kelas ORDER BY nama_kelas ASC");
               while ($kelas = mysqli_fetch_array($kel)) {
                 ?>
                <option value="<?php echo $kelas['id_kelas'] ?>"><?php echo $kelas['nama_kelas']; ?></option>
                <?php } ?>
             </select>
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Email</label>
              <input type="email" name="email" class="form-control" value="<?php echo $row3['email']?>">
              <div class="help-block with-errors"></div>
          </div>

                        <?php 
                        if ($row3['jenis_kelamin']=="Laki-laki") {
                             $check  = "checked";
                             $check2 = "";
                         }else{
                            $check2  = "checked";
                            $check   = ""; 
                          }
                        ?>
          <div class="form-group">
              <label class="control-label" for="title">Jenis Kelamin</label>
              <input type="radio" name="jenkel" value="Laki-laki" <?php echo $check; ?> id="jenis_kelamin<?php echo $row3['nis']; ?>">Laki-laki&nbsp;
              <input type="radio" name="jenkel" value="Perempuan" <?php echo $check2; ?> id="jenis_kelamin<?php echo $row3['nis']; ?>">Perempuan
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Alamat</label>
             <textarea name="alamat" class="form-control" value="<?php echo $row3['alamat']?>"><?php echo $row3['alamat']?></textarea>
              <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
              <label class="control-label" for="title">Foto</label>
               <img src="<?php echo "../../Admin/siswa/".$row3['foto'];?>" style="width:100px"><br><?php echo $row3['foto']; ?><br>
               <input type="hidden" name="foto_lama" value="<?php echo $row3['foto'];?>">
              <input type="file" name="foto" class="form-control">
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

