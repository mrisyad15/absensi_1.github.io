<?php 
include_once 'config/koneksi.php';
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

<div class="module module-login span4 offset4">
  <form class="form-vertical" action="?insert-sekolah" method="POST" enctype="multipart/form-data">
            <div class="module-head">
              <h3>Register</h3>
            </div>
            <div class="module-body">
            <div class="col-xs-6">
              <div class="control-group">
                <div class="controls row-fluid">
                  
                 <!-- <label class="control-label" for="title">ID Sekolah</label> -->
                 <input type="hidden" name="id" class="form-control" readonly value="<?php echo $kode_otomatis?>">
                </div>
              </div>

              <div class="control-group">
                      <div class="controls">
                        <div class="input-prepend">
                          <span class="add-on"><i class="menu-icon icon-home"></i></span><input class="form-control" type="text" name="sekolah" placeholder="Nama Sekolah">       
                        </div>
                      </div>
                    </div>

              <div class="control-group">

                      <div class="controls">
                        <div class="input-prepend">
                          <span class="add-on"><i class="menu-icon icon-phone"></i></span><input class="form-control" type="number" name="tlpn" placeholder="No. Telp">       
                        </div>
                      </div>
                    </div>
              

              <div class="control-group">
                <div class="controls row-fluid">
                  <div class="input-prepend">
                 <span class="add-on"><i class="menu-icon icon-map-marker"></i></span><textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
               </div>
                </div>
              </div>
              </div>
              <div class="col-xs-6">

              <div class="control-group">
                <div class="controls row-fluid">
                 <label class="control-label" for="title">Foto</label>
                 <input type="file" name="foto" class="form-control" required>
                </div>
              </div>
                <div class="control-group">
                    
                      <div class="controls">
                        <div class="input-prepend">
                          <span class="add-on"><i class="menu-icon icon-user"></i></span><input class="form-control" type="text" name="username" placeholder="Username">       
                        </div>
                      </div>
                    </div>
                <div class="control-group">

                      <div class="controls">
                        <div class="input-prepend">
                          <span class="add-on"><i class="menu-icon icon-key"></i></span><input class="form-control" type="password" name="password" placeholder="Password">       
                        </div>
                      </div>
                    </div> 

                     <div class="control-group">
                      <div class="controls">
                        <div class="input-prepend">
                          <span class="add-on"><i class="menu-icon icon-key"></i></span><input class="form-control" type="password" name="retype" placeholder=" Retype Password">       
                        </div>
                      </div>
                    </div> 
              
            <div class="module-foot">
              <div class="control-group">
                <div class="controls clearfix">
                 <button type="submit" name="insert-sekolah" class="btn slider-submit btn-info" id="save">Simpan</button>
                 <button type="reset" class="btn btn-default" onclick="history.go(-1)">Keluar</button>
                </div>
              </div>
            </div>
          </form>
        </div>



