<?php 
session_start();
include 'koneksi.php';
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
    <link rel="stylesheet" type="text/css" href="css/style_home.css">
  </head>
  <body>
    <br>
    <br>
    <br>
    <div class="container w-200 p-5 shadow rounded col-lg-6">
      <div class="row">
        <div class="container-heading">
          <h3 class="title">Konfirmasi Pembayaran (Panjar)</h3>
        </div>
        <div class="float-end">
          <a href="status.php" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <br>
        <br>
        <form-confirm method="post" enctype="multipart/form-data" action="">
          <div class="mb-3">
            <label class="form-label">Kode Order</label>
            <input type="text" class="form-control" name="kode_order" required="required">
          </div>
          <div class="mb-3">
            <label class="form-label">Informasi Pembayaran (Panjar)</label>
            <input type="text" class="form-control" name="informasi_pembayaran" placeholder="Nama Pemilik Rekening / Sumber Dana" required="required">
          </div>
          <div class="mb-3">
            <label class="form-label">Rekening Tujuan</label>
            <select class="form-select" name="pembayaran" required="required">
              <option value="">Pilih Rekening Tujuan</option>
              <?php 
                $pembayaran= mysqli_query($koneksi,"SELECT * FROM pembayaran");
                while($d = mysqli_fetch_array($pembayaran)){
              ?>
              <option value="<?=$d['metode']?>"><?php echo $d['metode'] ?> | <?php echo $d['no_rek'] ?></option> 
              <?php
              }
            ?>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Tanggal Bayar (Panjar)</label>
          <input type="date" class="form-control" name="tgl_bayar" required="required">
        </div>
        <div class="mb-3">
          <label class="form-label">Foto</label><br>
          <input type="file" name="foto">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-secondary btn-lg">Kirim</button>
        </div>
      </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>