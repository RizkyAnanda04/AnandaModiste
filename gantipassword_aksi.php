<?php
session_start();
include 'koneksi.php';
$id = $_SESSION['id'];
$password_baru = md5($_POST['password']);
mysqli_query($koneksi,"UPDATE user SET password='$password_baru' where user_id='$id'");
header("location:gantipassword.php?alert=sukses");
?>