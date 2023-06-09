<?php 
include 'koneksi.php';
session_start();

if (isset($_SESSION['username'])) {
  header("Location: login.php");
}
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];
  $password = md5($_POST['password']);
  
  if ($password == $password) {
    $user = "SELECT * FROM user WHERE email='$email'";
    $u = mysqli_query($koneksi, $user);
    if (!$u->num_rows > 0) {
      $user = "INSERT INTO user (username, email, alamat, no_hp, password) VALUES ('$username', '$email', '$alamat', '$no_hp', '$password')";
      $u = mysqli_query($koneksi, $user);
      if ($u) {
        echo "<script>alert('Register Berhasil')</script>";
        $username = "";
        $email = "";
        $alamat = "";
        $no_hp = "";
        $_POST['password'] = "";
      }else {
        echo "<script>alert('Periksa Kembali!')</script>";
      }
    }else {
      echo "<script>alert('Email Sudah Terdaftar!')</script>";
    }
  }else {
    echo "<script>alert('Password Tidak Sesuai!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="icon" href="Gambar/LogoAnandaModiste.png">
    <title>Pemesanan Busana Wanita</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Style Link -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Custom Js File Link  -->
    <script src="js/Script.js"></script>
  </head>
  <body>
    <br>
    <br>
    <center>
        <h2>ANANDA MODISTE</h2>
    </center>
    <br>
    <br>
    <div class="container w-200 p-5 shadow rounded col-lg-4">
      <div class="col-lg-12 col-lg-offset-12">
        <form method="post">
        <br>
        <center>
          <h4>REGISTER ANANDA MODISTE</h4>
          <img src="Gambar/LogoAnandaModiste.png" width="60px" height="60px">
        </center>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" placeholder="username" title="Please enter your username" name="username" required maxlength="50" id="username" required autocomplete="off" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" placeholder="email" title="Please enter your email" name="email" id="email" required maxlength="50" required autocomplete="off" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Alamat</label>
            <input type="alamat" placeholder="alamat" title="Please enter your alamat" name="alamat" id="alamat" required maxlength="50" required autocomplete="off" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Nomor Handphone</label>
          <input type="number" placeholder="nomor handphone" title="Please enter your nomor handphone" name="no_hp" id="no_hp" required maxlength="13" min="0" max="9999999999999" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" title="Please enter your password" placeholder="******" required="required" autocomplete="off" name="password" id="password" class="form-control">
        </div>  
        <center><button type="submit" name="submit" class="btn btn-secondary btn-lg">Register</button></center>
        <p style="text-align:center">Sudah Memiliki Akun? <a href="login.php" style="text-decoration:none">Login</a></p>
        <br/>
      </form>
      <a href="home.php" class="btn btn-secondary btn-lg"><i class="fa fa-arrow-left"></i> Kembali</a>
      </div>
    </div>
<?php include 'footer.php'; ?>