<!--Memanggil Header-->
<?php include('index.php'); ?>

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Tambah Data Anak Berhadapan Dengan Hukum | Puskesos Desa Sekarwangi</h1>
                    <form method="POST" action="3tanakberhadapandenganhukum.php"> 
                    <div class="form-group row">
                        <label for="validationCustom01" class="col-sm-2 col-form-label">No</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="validationCustom01" name="no" placeholder="Masukan No PMKS" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="validationCustom01" class="col-sm-2 col-form-label">Id Dtks</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="validationCustom01" name="id_dtks" placeholder="Masukan Id Dtks" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="validationCustom02" class="col-sm-2 col-form-label">NKK</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="validationCustom02" name="nkk" placeholder="Masukan NKK" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="validationCustom03" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="validationCustom03" name="nik" placeholder="Masukan NIK" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="validationCustom04" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="validationCustom04" name="nama" placeholder="Masukan Nama " >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="validationCustom05" class="col-sm-2 col-form-label">Nama Ibu</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="validationCustom05" name="nama_ibu" placeholder="Masukan Nama Ibu" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="validationCustom06" class="col-sm-2 col-form-label">Nama Ayah</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="validationCustom06" name="nama_ayah" placeholder="Masukan Nama Ayah" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="validationCustom07" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="validationCustom07" name="alamat" placeholder="Masukan Alamat " >
                        </div>
                    </div>
                    <div class="item form-group row">
                        <label for="validationCustom07" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-4">
                            <select name="keterangan" class="form-control" required>
                                <option value="">-Pilih Keterangan-</option>
                                <option value="Non-Peserta">Non-Peserta</option>
                                <option value="Peserta">Peserta</option>
                            </select>
                        </div>
                    </div>



                    <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-success">
                              <i class="fas fa-check fa-md"></i>&nbsp;&nbsp;Simpan</button>
                          </button>
                          <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>

<!--Memanggil Footer-->
<?php include('footer.php'); ?>