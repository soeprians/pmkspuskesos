<!--Memanggil Header-->
<?php include('index.php'); ?>

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Akun Pendataan PMKS Puskesos Desa Sekarwangi</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-sm-12 col-md-9">
                                    <a href="tambahakun.php" class="btn btn-primary">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;Tambah Akun</a>
                                </div>
                            </div>
                          </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            include 'koneksi.php';
                                            $data = mysqli_query($koneksi, "SELECT * FROM admin");
                                            while ($d = mysqli_fetch_array($data)){
                                             ?>

                                             
                                             <tr>

                                                 <th><?php echo $d['no']; ?></th>
                                                 <th><?php echo $d['email']; ?></th>
                                                 <th><?php echo $d['username']; ?></th>
                                                 <th><?php echo $d['password']; ?></th>
                                                 <td>
                                                     <a href="editakun.php?no=<?php echo $d['no']; ?>" class="btn btn-warning">
                                                        <i class="far fa-edit"></i>&nbsp;&nbsp;Edit</a>
                                                     <a  href="hapusakun.php?no=<?php echo $d['no']; ?>" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>&nbsp;&nbsp;Hapus</a>
                                                 </td>
                                             </tr>
                                             <?php  
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

<!--Memanggil Footer-->
<?php include('footer.php'); ?>