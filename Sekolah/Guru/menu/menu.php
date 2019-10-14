<ul class="widget widget-menu unstyled">
                                <li class="active"><a href="layoutguru.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="?page=data-siswa"><i class="menu-icon icon-bullhorn"></i>Data Siswa</a>
                                </li>
                                <li><a href="?page=data-kelas"><i class="menu-icon icon-inbox"></i>Data Kelas</a></li>
                            </ul>
                            <!--/.widget-nav-->
 
 <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Rekap Absen </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                    <?php
                                    $sk=$con->query("SELECT * FROM kelas ORDER BY nama_kelas ASC"); 
                                    while($rk=$sk->fetch_array()){ ?>
                                        <li><a href="?page=rekap-x&id_kelas=<?php echo $rk['id_kelas']; ?>"><i class="icon-inbox"></i><?php echo $rk['nama_kelas']; ?></a></li>
                                    <?php } ?>
                                    </ul>
                                </li>
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>