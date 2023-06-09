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
    <link rel="stylesheet" type="text/css" href="css/style_home.css">
  </head>
  <body>
    <br>
    <br>
    <div class="container w-200 p-5 shadow rounded col-lg-4">
      <div class="pesan-notifikasi">
        <?php
          session_start();
          include 'koneksi.php';
          $username = $_SESSION['username'];
          $email = $_SESSION['email'];
          $alamat = $_SESSION['alamat'];
          $no_hp = $_SESSION['no_hp'];
          
          if(isset($_GET['alert'])){
            if($_GET['alert'] == "sukses"){
              echo "<div class='alert alert-success'>Profil anda berhasil diperbaharui!</div>";
            }
          }
        ?>
        <div class="container-fluid col-lg-12 col-lg-offset-12">
          <form method="post" enctype="multipart/form-data" action="profil_user_aksi.php">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" class="form-control" placeholder="Masukkan Username..." name="username" required maxlength="50" required autocomplete="off" value="<?php echo $username ?>">
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="text" class="form-control" placeholder="Masukkan Email..." name="email" required maxlength="50" required autocomplete="off" value="<?php echo $email ?>">
            </div>
            <div class="mb-3">
              <label class="form-label">Alamat</label>
              <input type="text" class="form-control" placeholder="Masukkan Alamat..." name="alamat" required maxlength="50" required autocomplete="off" value="<?php echo $alamat ?>">
            </div>
            <div class="mb-3">
              <label class="form-label">Nomor Handphone</label>
              <input type="text" class="form-control" placeholder="Masukkan Nomor Handphone..." name="no_hp" required maxlength="13" min="0" max="9999999999999" value="<?php echo $no_hp ?>">
            </div>
            <div class="mb-3">
            <label class="form-label">Foto</label>
              <input type="file" name="foto">
              <p><small>Kosongkan jika tidak ingin mengubah foto.</small></p>
            </div>
            <div class="mb-3">
              <a href="index.php" class="btn btn-secondary btn-lg"><i class="fa fa-arrow-left"></i> Kembali</a>
              <button type="submit" class="btn btn-secondary btn-lg">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>