<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$no = $_GET['no'];


// menghapus data dari database
mysqli_query($koneksi,"delete from admin where no='$no'");

// mengalihkan halaman kembali
header("location:akun.php");

?>