<!--Memanggil Header-->
<?php include('index.php'); ?>

            <!-- Main Content -->
            <div id="content">

            	<!-- Begin Page Content -->
                <div class="container-fluid">

                	<!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard PMKS Puskesos Desa Sekarwangi</h1>
                    <div class="row">

                        <?php
                        // https://www.malasngoding.com
                        // menghubungkan dengan koneksi database
                        include 'koneksi.php';
                     
                        // mengambil data barang
                        $data_anakbalitaterlantar = mysqli_query($koneksi,"SELECT * FROM anakbalitaterlantar");
                        $data_anakterlantar = mysqli_query($koneksi,"SELECT * FROM anakterlantar");
                        $data_anakberhadapandenganhukum = mysqli_query($koneksi,"SELECT * FROM anakberhadapandenganhukum");
                        $data_anakyangbermasalahsosialpisiologis = mysqli_query($koneksi,"SELECT * FROM anakyangbermasalahsosialpisiologis");
                        $data_anakjalanan = mysqli_query($koneksi,"SELECT * FROM anakjalanan");
                        $data_wanitarawansosialekonomi = mysqli_query($koneksi,"SELECT * FROM wanitarawansosialekonomi");
                        $data_korbantindakkekerasan = mysqli_query($koneksi,"SELECT * FROM korbantindakkekerasan");
                        $data_lanjutusiaterlantar = mysqli_query($koneksi,"SELECT * FROM lanjutusiaterlantar");
                        $data_penyandangcacatadk = mysqli_query($koneksi,"SELECT * FROM penyandangcacatadk");
                        $data_penyandangcacatodk = mysqli_query($koneksi,"SELECT * FROM penyandangcacatodk");
                        $data_tunasusila = mysqli_query($koneksi,"SELECT * FROM tunasusila");
                        $data_pengemis = mysqli_query($koneksi,"SELECT * FROM pengemis");
                        $data_gelandangan = mysqli_query($koneksi,"SELECT * FROM gelandangan");
                        $data_waria = mysqli_query($koneksi,"SELECT * FROM waria");
                        $data_bekaswargabinaanlembagakemasyarakatan = mysqli_query($koneksi,"SELECT * FROM bekaswargabinaanlembagakemasyarakatan");
                        $data_korbanpenyalahgunaannarkoba = mysqli_query($koneksi,"SELECT * FROM korbanpenyalahgunaannarkoba");
                        $data_keluargafakirmiskin = mysqli_query($koneksi,"SELECT * FROM keluargafakirmiskin");
                        $data_keluargayangtinggaldirumahtidaklayakhuni = mysqli_query($koneksi,"SELECT * FROM keluargayangtinggaldirumahtidaklayakhuni");
                        $data_keluargabermasalahsosialphisiologis = mysqli_query($koneksi,"SELECT * FROM keluargabermasalahsosialphisiologis");
                        $data_komunitasadatterpencil = mysqli_query($koneksi,"SELECT * FROM komunitasadatterpencil");
                        $data_korbanbencanaalam = mysqli_query($koneksi,"SELECT * FROM korbanbencanaalam");
                        $data_korbanbencanasosial = mysqli_query($koneksi,"SELECT * FROM korbanbencanasosial");
                        $data_pekerjamigranterlantar = mysqli_query($koneksi,"SELECT * FROM pekerjamigranterlantar");
                        $data_penyandanghivaids = mysqli_query($koneksi,"SELECT * FROM penyandanghivaids");
                        $data_keluargarentan = mysqli_query($koneksi,"SELECT * FROM keluargarentan");
                        $data_trafficking = mysqli_query($koneksi,"SELECT * FROM trafficking");
                     
                        // menghitung data barang
                        $jumlah_anakbalitaterlantar = mysqli_num_rows($data_anakbalitaterlantar);
                        $jumlah_anakterlantar = mysqli_num_rows($data_anakterlantar);
                        $jumlah_anakberhadapandenganhukum = mysqli_num_rows($data_anakberhadapandenganhukum);
                        $jumlah_anakyangbermasalahsosialpisiologis = mysqli_num_rows($data_anakyangbermasalahsosialpisiologis);
                        $jumlah_anakjalanan = mysqli_num_rows($data_anakjalanan);
                        $jumlah_wanitarawansosialekonomi = mysqli_num_rows($data_wanitarawansosialekonomi);
                        $jumlah_korbantindakkekerasan = mysqli_num_rows($data_korbantindakkekerasan);
                        $jumlah_lanjutusiaterlantar = mysqli_num_rows($data_lanjutusiaterlantar);
                        $jumlah_penyandangcacatadk = mysqli_num_rows($data_penyandangcacatadk);
                        $jumlah_penyandangcacatodk = mysqli_num_rows($data_penyandangcacatodk);
                        $jumlah_tunasusila = mysqli_num_rows($data_tunasusila);
                        $jumlah_pengemis = mysqli_num_rows($data_pengemis);
                        $jumlah_gelandangan = mysqli_num_rows($data_gelandangan);
                        $jumlah_waria = mysqli_num_rows($data_waria);
                        $jumlah_bekaswargabinaanlembagakemasyarakatan = mysqli_num_rows($data_bekaswargabinaanlembagakemasyarakatan);
                        $jumlah_korbanpenyalahgunaannarkoba = mysqli_num_rows($data_korbanpenyalahgunaannarkoba);
                        $jumlah_keluargafakirmiskin = mysqli_num_rows($data_keluargafakirmiskin);
                        $jumlah_keluargayangtinggaldirumahtidaklayakhuni = mysqli_num_rows($data_keluargayangtinggaldirumahtidaklayakhuni);
                        $jumlah_keluargabermasalahsosialphisiologis = mysqli_num_rows($data_keluargabermasalahsosialphisiologis);
                        $jumlah_komunitasadatterpencil = mysqli_num_rows($data_komunitasadatterpencil);
                        $jumlah_korbanbencanaalam = mysqli_num_rows($data_korbanbencanaalam);
                        $jumlah_korbanbencanasosial = mysqli_num_rows($data_korbanbencanasosial);
                        $jumlah_pekerjamigranterlantar = mysqli_num_rows($data_pekerjamigranterlantar);
                        $jumlah_penyandanghivaids = mysqli_num_rows($data_penyandanghivaids);
                        $jumlah_keluargarentan = mysqli_num_rows($data_keluargarentan);
                        $jumlah_trafficking = mysqli_num_rows($data_trafficking);
                        ?>

 					<!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-dark shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="1dataanakbalitaterlantar.php">Anak Balita Terlantar</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_anakbalitaterlantar; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-child fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="2dataanakterlantar.php">Anak Terlantar</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_anakterlantar; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-child fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="3dataanakberhadapandenganhukum.php">Anak Berhadapan Dengan Hukum</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_anakberhadapandenganhukum; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-balance-scale fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="4dataanakyangbermasalahsosialpisiologis.php">Anak Yang Bermasalah Sosial Pisiologis</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_anakyangbermasalahsosialpisiologis; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-frown fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-dark shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="5dataanakjalanan.php">Anak Jalanan</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_anakjalanan; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-motorcycle fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="6datawanitarawansosialekonomi.php">Wanita Rawan Sosial Ekonomi</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_wanitarawansosialekonomi; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-female fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="7datakorbantindakkekerasan.php">Korban Tindak Kekerasan</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_korbantindakkekerasan; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-exclamation fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="8datalanjutusiaterlantar.php">Lanjut Usia Terlantar</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_lanjutusiaterlantar; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-blind fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-dark shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="9datapenyandangcacatadk.php">Penyandang Cacat ADK</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_penyandangcacatadk; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-heart fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="10datapenyandangcacatodk.php">Penyandang Cacat ODK</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_penyandangcacatodk; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-heart fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="11datatunasusila.php">Tuna Susila</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_tunasusila; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-blind fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="12datapengemis.php">Pengemis</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_pengemis; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-sign-language fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-dark shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="13datagelandangan.php">Gelandangan</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_gelandangan; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-user fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="14datawaria.php">Waria</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_waria; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-transgender-alt fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="15databekaswargabinaanlembagakemasyarakatan.php">Bekas Warga Binaan Lembaga Kemasyarakatan</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_bekaswargabinaanlembagakemasyarakatan; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-balance-scale fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="16datakorbanpenyalahgunaannarkoba.php">Korban Penyalahgunaan Narkoba</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_korbanpenyalahgunaannarkoba; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-exclamation-triangle fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-dark shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="17datakeluargafakirmiskin.php">Keluarga Fakir Miskin</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_keluargafakirmiskin; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-frown fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="18datakeluargayangtinggaldirumahtidaklayakhuni.php">Keluarga Yang Tinggal DiRumah Tidak Layak Huni</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_keluargayangtinggaldirumahtidaklayakhuni; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-home fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="19datakeluargabermasalahsosialphisiologis.php">Keluarga Bermasalah Sosial Phisiologis</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_keluargabermasalahsosialphisiologis; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-frown fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="20datakomunitasadatterpencil.php">Komonitas Adat Terpencil</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_komunitasadatterpencil; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-share-alt fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-dark shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="21datakorbanbencanaalam.php">Korban Bencana Alam</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_korbanbencanaalam; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-tree fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="22datakorbanbencanasosial.php">Korban Bencana Sosial</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_korbanbencanasosial; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-users fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="23datapekerjamigranterlantar.php">Pekerja Migran Terlantar</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_pekerjamigranterlantar; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-address-book fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="24datapenyandanghivaids.php">Penyandang HIV/AIDS</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_penyandanghivaids; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-plus fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-dark shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="25datakeluargarentan.php">Keluarga Rentan</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_keluargarentan; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-users fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="26datatrafficking.php">Trafficking</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_trafficking; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-eye fa-3x text-gray-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--Memanggil Footer-->
<?php include('footer.php'); ?>