<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="icon" href="Gambar/LogoAnandaModiste.png">
    <title>Pemesanan Busana Wanita</title>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Style Link -->
    <link rel="stylesheet" type="text/css" href="css/style_home.css">
  </head>
  <body>
    <br>
    <br>
    <br>
    <div class="container w-200 p-5 shadow rounded col-lg-6">
        <div class="row">
            <div class="container-heading">
              <h3 class="title">Ganti Password</h3>
            </div>
            <?php

            session_start();
            include 'koneksi.php';

            if(isset($_GET['alert'])){
                if($_GET['alert'] == "sukses"){
                    echo "<div class='alert alert-success'>Password anda berhasil diganti!</div>";
                }
            }
            ?>
            <div class="container-fluid main" id="kategori">
                <div class="row">
                    <form action="gantipassword_aksi.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Masukkan Password Baru</label>
                            <input type="password" class="form-control" placeholder="Masukkan Password Baru..." name="password" required="required" min="8">
                        </div>
                        <br>
                        <div class="mb-3">
                            <a href="index.php" class="btn btn-secondary btn-lg"><i class="fa fa-arrow-left"></i> Kembali</a>
                            <input type="submit" class="btn btn-secondary btn-lg" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>