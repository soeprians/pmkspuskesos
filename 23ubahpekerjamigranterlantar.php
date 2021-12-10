<!--Memanggil Header-->
<?php include('index.php'); ?>

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    <h1 class="h3 mb-2 text-gray-800">Edit Pekerja Migran Terlantar | Puskesos Desa Sekarwangi</h1>
                    <?php
                    include 'koneksi.php';
                    $no = $_GET['no'];
                    $data = mysqli_query($koneksi,"SELECT * FROM pekerjamigranterlantar WHERE no='$no'");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <form method="POST" action="23ubhpekerjamigranterlantar.php">
                        <div class="form-group row">
                            <label for="inputNo" class="col-sm-2 col-form-label">No (Tidak bisa diedit)</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" name="no" id="inputNo" value="<?php echo $d['no']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputIdDtks" class="col-sm-2 col-form-label">Id Dtks</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" name="id_dtks" id="inputIdDtks" value="<?php echo $d['id_dtks']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNKK" class="col-sm-2 col-form-label">NKK</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" id="inputNKK" name="nkk" value="<?php echo $d['nkk']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNIK" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" name="nik" id="inputNIK" value="<?php echo $d['nik']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" id="inputNama" name="nama" value="<?php echo $d['nama']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNamaIbu" class="col-sm-2 col-form-label">Nama Ibu</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" id="inputNamaIbu" name="nama_ibu" value="<?php echo $d['nama_ibu']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNamaAyah" class="col-sm-2 col-form-label">Nama Ayah</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" id="inputNamaAyah" name="nama_ayah" value="<?php echo $d['nama_ayah']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $d['alamat']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-4">
                                <select name="keterangan" class="form-control" required>
                                    <option value="">-Keterangan</option>
                                    <option value="Non-Peserta" <?php if($d['keterangan'] == 'Non-Peserta'){ echo 'selected'; } ?>>Non-Peserta</option>
                                    <option value="Peserta" <?php if($d['keterangan'] == 'Peserta'){ echo 'selected'; } ?>>Peserta</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-check fa-md"></i>&nbsp;&nbsp;Ubah</button>
                                <button type="reset" class="btn btn-dark">
                                    <i class="fa fa-undo"></i>&nbsp;&nbsp;Reset</button>
                            </div>
                          </div>
                        </form>
                        <?php 
                    }
                    ?>
                </div>
    
            </div>

<!--Memanggil Footer-->
<?php include('footer.php'); ?>