<?php 

// koneksi database
include 'koneksi.php';

// menangkap sebuah data yang dikirim dari form
$no = $_POST['no'];
$id_dtks = $_POST['id_dtks'];
$nkk = $_POST['nkk'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$nama_ibu = $_POST['nama_ibu'];
$nama_ayah = $_POST['nama_ayah'];
$alamat = $_POST['alamat'];
$keterangan = $_POST['keterangan'];

// menginput data ke databasenya
$insert = mysqli_query($koneksi, "insert into anakterlantar value('$no', '$id_dtks', '$nkk', '$nik', '$nama', '$nama_ibu', '$nama_ayah', '$alamat', '$keterangan')");

//set session sukses
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan sebuah halaman kembali
header("location:2dataanakterlantar.php");

 ?>