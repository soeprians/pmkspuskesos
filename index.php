<?php
//inisialisasi session
session_start();
 
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}
 
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Puskesos PMKS</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon">
                    <i class="fa fa-university"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Puskesos Desa Sekarwangi</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Halaman Utama</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="akun.php">
                    <i class="fa fa-users"></i>
                    <span>Accounts</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data PMKS
            </div>

           
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="1dataanakbalitaterlantar.php">
                    <i class="fas fa-fw fa-child"></i>
                    <span>Anak Balita Terlantar</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="2dataanakterlantar.php" >
                    <i class="fas fa-fw fa-child"></i>
                    <span>Anak Terlantar</span>
                </a>
                <div id="collapseAnakTerlantar" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="3dataanakberhadapandenganhukum.php">
                    <i class="fas fa-fw fa-balance-scale"></i>
                    <span>Anak Berhadapan Dengan Hukum</span>
                </a>
                <div id="collapseAnakBerhadapanDenganHukum" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="4dataanakyangbermasalahsosialpisiologis.php">
                    <i class="fas fa-fw fa-frown"></i>
                    <span>Anak Yang Bermasalah Sosial Pisiologis</span>
                </a>
                <div id="collapseAnakYangBermasalahSosialPisiologis" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="5dataanakjalanan.php">
                    <i class="fas fa-fw fa-motorcycle"></i>
                    <span>Anak Jalanan</span>
                </a>
                <div id="collapseAnakJalanan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="6datawanitarawansosialekonomi.php">
                    <i class="fas fa-fw fa-female"></i>
                    <span>Wanita Rawan Sosial Ekonomi</span>
                </a>
                <div id="collapseWanitaRawanSosialEkonomi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="7datakorbantindakkekerasan.php" >
                    <i class="fas fa-fw fa-exclamation"></i>
                    <span>Korban Tindak Kekerasan</span>
                </a>
                <div id="collapseKorbanTindakKekerasan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="8datalanjutusiaterlantar.php">
                    <i class="fas fa-fw fa-blind"></i>
                    <span>Lanjut Usia Terlantar</span>
                </a>
                <div id="collapseLanjutUsiaTerlantar" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="9datapenyandangcacatadk.php">
                    <i class="fas fa-fw fa-heart"></i>
                    <span>Penyandang Cacat ADK</span>
                </a>
                <div id="collapsePenyandangCacatADK" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="10datapenyandangcacatodk.php">
                    <i class="fas fa-fw fa-heart"></i>
                    <span>Penyandang Cacat ODK</span>
                </a>
                <div id="collapsePenyandangCacatodk" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="11datatunasusila.php">
                    <i class="fas fa-fw fa-blind"></i>
                    <span>Tuna Susila</span>
                </a>
                <div id="collapseTunasusila" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="12datapengemis.php">
                    <i class="fas fa-fw fa-sign-language"></i>
                    <span>Pengemis</span>
                </a>
                <div id="collapsePengemis" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="13datagelandangan.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Gelandangan</span>
                </a>
                <div id="collapseGelandangan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="14datawaria.php">
                    <i class="fas fa-fw fa-transgender-alt"></i>
                    <span>Waria</span>
                </a>
                <div id="collapseWaria" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="15databekaswargabinaanlembagakemasyarakatan.php">
                    <i class="fas fa-fw fa-balance-scale"></i>
                    <span>Bekas Warga Binaan Lembaga Kemasyarakatan</span>
                </a>
                <div id="collapseBekasWargaBinaanLembagaKemasyarakatan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="16datakorbanpenyalahgunaannarkoba.php">
                    <i class="fas fa-fw fa-exclamation-triangle"></i>
                    <span>Korban Penyalahgunaan Narkoba</span>
                </a>
                <div id="collapseKorbanPenyalahgunaanNarkoba" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="17datakeluargafakirmiskin.php">
                    <i class="fas fa-fw fa-frown"></i>
                    <span>Keluarga Fakir Miskin</span>
                </a>
                <div id="collapseKeluargaFakirMiskin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                   
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="18datakeluargayangtinggaldirumahtidaklayakhuni.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Keluarga Yang Tinggal DiRumah Tidak Layak Huni</span>
                </a>
                <div id="collapseKeluargaYangTinggalDiRumahTidakLayakHuni" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="19datakeluargabermasalahsosialphisiologis.php">
                    <i class="fas fa-fw fa-frown"></i>
                    <span>Keluarga Bermasalah Sosial Phisiologis</span>
                </a>
                <div id="collapseKeluargaBermasalahSosialPhisiologis" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="20datakomunitasadatterpencil.php">
                    <i class="fas fa-fw fa-share-alt"></i>
                    <span>Komonitas Adat Terpencil</span>
                </a>
                <div id="collapseKomonitasAdatTerpencil" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="21datakorbanbencanaalam.php">
                    <i class="fas fa-fw fa-tree"></i>
                    <span>Korban Bencana Alam</span>
                </a>
                <div id="collapseKorbanBencanaAlam" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="22datakorbanbencanasosial.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Korban Bencana Sosial</span>
                </a>
                <div id="collapseKorbanBencanaSosial" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="23datapekerjamigranterlantar.php">
                    <i class="fas fa-fw fa-address-book"></i>
                    <span>Pekerja Migran Terlantar</span>
                </a>
                <div id="collapsePekerjaMigranTerlantar" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="24datapenyandanghivaids.php">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Penyandang HIV/AIDS</span>
                </a>
                <div id="collapsePenyandangHIVAIDS" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="25datakeluargarentan.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Keluarga Rentan</span>
                </a>
                <div id="collapseKeluargaRentan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="26datatrafficking.php">
                    <i class="fas fa-fw fa-eye"></i>
                    <span>Trafficking</span>
                </a>
                <div id="collapseTrafficking" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div> 
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">


                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <!-- <li class="nav-item dropdown no-arrow d-sm-none"> 
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>-->
                            <!-- Dropdown - Messages -->
                            <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" 
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>-->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="logout.php" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'] ; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
