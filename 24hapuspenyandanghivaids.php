<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_dtks = $_GET['id_dtks'];


// menghapus data dari database
mysqli_query($koneksi,"delete from penyandanghivaids where id_dtks='$id_dtks'");

// mengalihkan halaman kembali
header("location:24datapenyandanghivaids.php");

?>