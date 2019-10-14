 <?php include_once('../config/koneksi.php'); ?>
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
                                    <input type="text" class="span3" placeholder="Filter by name...">
                                    <button type="submit" class="btn">
                                        <i class="icon-search"></i>
                                    </button>
                                </div>
                                </form>
                                <div class="btn-group pull-right" data-toggle="buttons-radio">
                                    <a href="?add=add-siswa" class="btn btn-info"><i class="icon-home"></i>
                                        Add</a>
                                </div>
                            </div>
                            <?php 
                              $tampil  = mysqli_query($con,"SELECT * FROM siswa");
                                 while (  $row = mysqli_fetch_array($tampil)) { ?> 
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="media user">
                                            <a class="media-avatar pull-left" href="#">
                                                <img src="<?php echo "siswa/".$row['foto'];?>">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-title">
                                                    <?php echo $row['nis']; ?> |  <?php echo $row['nama_siswa']; ?> 
                                                </h3>
                                                <p>
                                                    <small class="muted"><?php echo $row['email'] ?><br><?php echo $row['jenis_kelamin'] ?></small></p>
                                                <div class="media-option btn-group shaded-icon">
                                                    <a class="btn btn-small" href="?edit-siswa=<?php echo $row['nis'];?>">
                                                        <i class="icon-pencil"></i>
                                                    </button>
                                                    <a  class="btn btn-small" href="?delete-siswa=<?php echo $row['nis'];?>" onclick="return-confirm('Anda Yakin ?')">
                                                        <i class="icon-trash"></i></a>
                                                    </button>
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