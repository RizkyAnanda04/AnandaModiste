<?php 
include 'koneksi.php';
$email = $_POST['email'];
$password = md5($_POST['password']);
	$login = mysqli_query($koneksi, "SELECT * FROM admin WHERE admin_email='$email' AND admin_password='$password'");
	$cek = mysqli_num_rows($login);
	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id'] = $data['admin_id'];
		$_SESSION['nama'] = $data['admin_nama'];
		$_SESSION['username'] = $data['admin_username'];
		$_SESSION['email'] = $data['admin_email'];
		$_SESSION['status'] = "admin_login";
		header("location:admin/index.php");
	}else{
		$login = mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email' AND password='$password'");
		$cek = mysqli_num_rows($login);
		if($cek > 0){
		session_start();
			$data = mysqli_fetch_assoc($login);
			$_SESSION['id'] = $data['user_id'];
			$_SESSION['username'] = $data['username'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['address'] = $data['address'];
			$_SESSION['no_hp'] = $data['no_hp'];
			$_SESSION['status'] = "user_login";
	    header("location:index.php");
	}else{
		header("location:login.php?alert=gagal");
	}
}
?>