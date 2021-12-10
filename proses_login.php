<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$pass = md5($_POST['password']);
$login = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' and pass='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";
  header("location:index.php");

}else {
  header("location:index.php?pesan=gagal");

}
?>