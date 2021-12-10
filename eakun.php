<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no = $_POST['no'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// update data ke database
mysqli_query($koneksi, "update admin set no='$no', email='$email', username='$username', password='$password' where no='$no'");

// mengalihkan halaman kembali ke index.php
header("location:akun.php");

?>