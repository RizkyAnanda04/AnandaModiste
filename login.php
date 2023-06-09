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
        <div class="pesan-notifikasi">
        <?php 
        /*Pesan notifikasi*/
        if(isset($_GET['alert'])){
          if($_GET['alert'] == "gagal"){
            echo "<div class='alert alert-danger'><center>EMAIL DAN PASSWORD ANDA SALAH!</center></div>";
          }else if($_GET['alert'] == "logout"){
            echo "<div class='alert alert-success'><center>ANDA TELAH BERHASIL LOGOUT</center></div>";
          }else if($_GET['alert'] == "belum_login"){
            echo "<div class='alert alert-warning'><center>ANDA HARUS LOGIN TERLEBIH DAHULU</center></div>";
          }
          }
        ?>
        <div class="col-lg-12 col-lg-offset-12">
          <form method="post" action="proses_login.php">
          <br>
          <center>
            <h4>LOGIN ANANDA MODISTE</h4>
            <img src="Gambar/LogoAnandaModiste.png" width="60px" height="60px">
          </center>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" placeholder="email" title="Please enter your email" required="required" autocomplete="off" name="email" id="email" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" title="Please enter your password" placeholder="********" required="required" autocomplete="off" name="password" id="password" class="form-control">
          </div>  
          <center><button type="submit" name="submit" class="btn btn-secondary btn-lg">Log In</button></center>
          <p style="text-align:center">Belum Memiliki Akun? <a href="register.php" style="text-decoration:none">Register</a></p>
          <br/>
        </form>
        <a href="home.php" class="btn btn-secondary btn-lg"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>