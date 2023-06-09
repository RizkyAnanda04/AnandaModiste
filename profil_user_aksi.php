<?php 
include 'koneksi.php';
session_start();

$id = $_SESSION['id'];
$username  = $_POST['username'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if($filename == ""){
	mysqli_query($koneksi, "UPDATE user SET username='$username', email='$email', alamat='$alamat', no_hp= '$no_hp' WHERE user_id='$id'")or die(mysqli_error($koneksi));
	header("location:profil_user.php?alert=sukses");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	if(in_array($ext,$allowed) ) {
	//Hapus file lama
		$lama = mysqli_query($koneksi,"SELECT * FROM user WHERE user_id='$id'");
		$l = mysqli_fetch_assoc($lama);
		$nama_file_lama = $l['user_foto'];
		unlink("Gambar/".$nama_file_lama);

	// Upload file baru
		move_uploaded_file($_FILES['foto']['tmp_name'], 'Gambar/'.$rand.'_'.$filename);
		$nama_file = $rand.'_'.$filename;
		mysqli_query($koneksi, "UPDATE user SET username='$username', email='$email', alamat='$alamat', no_hp='$no_hp', user_foto='$nama_file' WHERE user_id='$id'")or die(mysqli_error($koneksi));
		header("location:profil_user.php?alert=sukses");
	}else{
		header("location:profil_user.php?alert=gagal");
	}
}