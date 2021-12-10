<!--Memanggil Header-->
<?php include('index.php'); ?>

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tambah Akun PMKS Puskesos Desa Sekarwangi</h1>
                <form method="POST" action="takun.php">
                    <div class="form-group row">
                        <label for="validationCustom01" class="col-sm-2 col-form-label">No</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="validationCustom01" name="no" placeholder="Masukan No" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="validationCustom02" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="validationCustom02" name="email" placeholder="Masukan Email" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="validationCustom02" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="validationCustom02" name="username" placeholder="Masukan Username" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="validationCustom03" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="validationCustom03" name="password" placeholder="Masukan Password" required oninvalid="this.setCustomValidity('Tidak boleh kosong !')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-success">
                              <i class="fas fa-check fa-md"></i>&nbsp;&nbsp;Simpan</button>
                          <button type="reset" class="btn btn-warning">
                            <i class="fa fa-undo"></i>&nbsp;&nbsp;Reset</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>

<!--Memanggil Footer-->
<?php include('footer.php'); ?>