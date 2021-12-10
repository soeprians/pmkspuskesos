<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no = $_POST['no'];
$id_dtks = $_POST['id_dtks'];
$nkk = $_POST['nkk'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$nama_ibu = $_POST['nama_ibu'];
$nama_ayah = $_POST['nama_ayah'];
$alamat = $_POST['alamat'];
$keterangan = $_POST['keterangan'];

// update data ke database
mysqli_query($koneksi, "update komunitasadatterpencil set no='$no', id_dtks='$id_dtks', nkk='$nkk', nik='$nik', nama='$nama', nama_ibu='$nama_ibu', nama_ayah='$nama_ayah', alamat='$alamat', keterangan='$keterangan' where no='$no'");

// mengalihkan halaman kembali ke index.php
header("location:20datakomunitasadatterpencil.php");

?>