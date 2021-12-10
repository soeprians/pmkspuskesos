<!--Memanggil Header-->
<?php include('index.php'); ?>

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Keluarga Fakir Miskin | Puskesos Desa Sekarwangi</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow">
                        <div class="card-header py-3">

                            <!-- Search -->
                            <div class="row">
                                <div class="col-sm-12 col-md-9">
                                    <a href="17tambahkeluargafakirmiskin.php" class="btn btn-primary">
                                      <i class="fa fa-file"></i>&nbsp;&nbsp;Tambah Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Dtks</th>
                                            <th>NKK</th>
                                            <th>NIK</th>
                                            <th>Nama Peserta</th>
                                            <th>Nama Ibu</th>
                                            <th>Nama Ayah</th>
                                            <th>Alamat</th>
                                            <th>Keterangan</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        include 'koneksi.php';
                                        $data = mysqli_query($koneksi, "SELECT * FROM keluargafakirmiskin");
                                        while ($d = mysqli_fetch_array($data)){
                                         ?>

                                         
                                         <tr>

                                            <th><?php echo $d['no']; ?></th>
                                            <th><?php echo $d['id_dtks']; ?></th>
                                             <th><?php echo $d['nkk']; ?></th>
                                             <th><?php echo $d['nik']; ?></th>
                                             <th><?php echo $d['nama']; ?></th>
                                             <th><?php echo $d['nama_ibu']; ?></th>
                                             <th><?php echo $d['nama_ayah']; ?></th>
                                             <th><?php echo $d['alamat']; ?></th>
                                             <th><?php echo $d['keterangan']; ?></th>
                                             <td>
                                                 <a href="17ubahkeluargafakirmiskin.php?no=<?php echo $d['no']; ?>" class="btn btn-warning">
                                                  <i class="far fa-edit"></i>&nbsp;&nbsp;Edit</a>
                                                 <a href="17hapuskeluargafakirmiskin.php?id_dtks=<?php echo $d['id_dtks']; ?>" class="btn btn-danger">
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