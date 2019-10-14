 <?php include_once('../../config/koneksi.php'); ?>
<div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    All Students</h3>
                            </div>
                            <div class="module-option clearfix">
                                <form>
                                <div class="input-append pull-left">
                                   
                                     <a href="?page=data-siswa" class="btn btn-info">All Students</a>
                                     <?php
                                    $sk=$con->query("SELECT * FROM kelas ORDER BY nama_kelas ASC"); 
                                    while($rk=$sk->fetch_array()){ ?>
                                        <a href="?page=data-siswa2&id_kelas=<?php echo $rk['id_kelas']; ?>" class="btn btn-info"><?php echo $rk['nama_kelas']; ?></a>
                                    <?php } ?>
                                </div>
                                </form>
                                <div class="btn-group pull-right" data-toggle="buttons-radio">
                                    <a href="?add=add-siswa" class="btn btn-info">
                                        Add</a>
                                </div>
                            </div>
                            <?php 
                              $id=$_GET['id_kelas'];
                              $tampil = mysqli_query($con, "SELECT
  *
FROM
  `siswa`
  INNER JOIN `kelas` ON `kelas`.`id_kelas` = `siswa`.`id_kelas` WHERE kelas.id_kelas='$id' ORDER BY nis ASC");;
                                 while (  $row = mysqli_fetch_array($tampil)) { ?> 
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="media user">
                                            <a class="media-avatar pull-left" href="#">
                                                <img src="<?php echo "../../Admin/siswa/".$row['foto'];?>">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-title">
                                                    <?php echo $row['nis']; ?> |  <?php echo $row['nama_siswa']; ?> <!-- <input type="checkbox" name="users[]" value="<?php echo $row["userId"]; ?>" style="float: right" > -->
                                                </h3>
                                                <p>
                                                    <small class="muted"><?php echo $row['email'] ?><br><?php echo $row['jenis_kelamin'] ?></small></p>
                                                <div class="media-option btn-group shaded-icon">
                                                    <a class="btn btn-small" href="?edit-siswa=<?php echo $row['nis'];?>">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a  class="btn btn-small" href="?delete-siswa=<?php echo $row['nis'];?>" onclick="return-confirm('Anda Yakin ?')">
                                                        <i class="icon-trash"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <!--/.row-fluid-->
                                <br />
                                <div class="pagination pagination-centered">
                                    <ul>
                                        <li><a href="#"><i class="icon-double-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="icon-double-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.content-->
                </div> 