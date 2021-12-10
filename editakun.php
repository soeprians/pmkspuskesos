<!--Memanggil Header-->
<?php include('index.php'); ?>

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Akun Pendataan PMKS Puskesos Desa Sekarwangi</h1>

                    <?php
                    include 'koneksi.php';
                    $no = $_GET['no'];
                    $data = mysqli_query($koneksi,"SELECT * FROM admin WHERE no='$no'");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <form method="POST" action="eakun.php">
                        <div class="form-group row">
                            <label for="inputno" class="col-sm-2 col-form-label">No</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" name="no" id="inputno" value="<?php echo $d['no']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" name="email" id="inputEmail" value="<?php echo $d['email']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" id="inputUsername" name="username" value="<?php echo $d['username']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" name="password" id="inputPassword" value="<?php echo $d['password']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-check fa-md"></i>&nbsp;&nbsp;Edit</button>
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