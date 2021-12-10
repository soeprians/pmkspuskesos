<?php 

// koneksi database
include 'koneksi.php';

// menangkap sebuah data yang dikirim dari form
$no = $_POST['no'];
$username = $_POST['username'];
$password = $_POST['password'];

// menginput data ke databasenya
$insert = mysqli_query($koneksi, "insert into admin value('$no', '$username', '$password')");

//set session sukses
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

// mengalihkan sebuah halaman kembali
header("location:akun.php");

 ?>