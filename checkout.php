<?php 
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags -->
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
    <div class="container w-200 p-5 shadow rounded col-lg-6">
      <div class="row">
        <div class="container-heading">
          <h3 class="title">Checkout</h3>
        </div>
        <div class="float-end">
          <br>
          <a href="cart.php" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        &emsp;
        <p>Username: <?=$_SESSION['username']?> <span>|</span> Email: <?=$_SESSION['email']?></p>
        <p>Alamat: <?=$_SESSION['alamat']?></p>
        <p>No.Hanphone: <?=$_SESSION['no_hp']?></p>
        <hr class="my-4">
        <div class="Table-cart">
          <table id="dataTable" class="table table-bordered table-striped table-hover table-datatable">
            <thead bgcolor="lightgray">
              <tr>
                <th width="1%">No</th>
                <th>Model</th>
                <th>Nama Model</th>
                <th>Ukuran</th>
                <th>Tanggal Pesan</th>
                <th>Tanggal Selesai</th>
                <th>Total Harga</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        &emsp;
        <center>
        <p>Pemesanan Anda akan segera diproses ketika kain sudah dikirim ke toko dan setelah Anda melakukan pembayaran muka ke metode pembayaran yang telah tersedia.</p>
        <br>
        <input type="submit" class="form-control btn btn-success" name="checkout" value="Buat Pesanan"/>
        </center>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>