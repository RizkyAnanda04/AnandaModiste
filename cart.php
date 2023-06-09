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

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Style Link -->
    <link rel="stylesheet" type="text/css" href="css/style_home.css">

    <!-- Datatable Link -->
   <link rel="stylesheet" type="text/css" href="../assets/js/DataTables/datatables.css">
  </head>
  <body>
    <section class="cart">
      <div class="container-fluid">
        <h2>Keranjang Saya : </h2>
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
                <th>Harga</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
        <tr>
         <td colspan="8" class="text-center">No Order in Cart</td>
        </tr>
        <tr>
        <td colspan="6" align="right"><b>Total</b></td>
        <td><b><?php ?></b></td>
        </tr>
            </tbody>
          </table>
        </div>
        <div class="float-end">
          <a class="btn btn-dark" href="kategori.php" role="button" aria-expanded="false"><span class="bi bi-arrow-left-square" aria-hidden="true"></span>Continue Ordering</a>
          <button type="submit" class="btn btn-success" name="save"><i class="bi bi-save"></i> Save Changes</button>
          <a class="btn btn-danger" href="clear_cart.php" role="button" aria-expanded="false"><span class="bi bi-trash"></span>Clear Cart</a>
          <a class="btn btn-dark" href="checkout.php" role="button" aria-expanded="false"><span class="bi bi-check-lg" aria-hidden="true"></span></span>Checkout</a>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>