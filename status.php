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

    <!-- Datatable Link -->
    <link rel="stylesheet" type="text/css" href="assets/js/DataTables/datatables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
  </head>
  <body>
    <br>
    <br>
    <div class="checkout">
        <div class="container-fluid">
            <h3>Kamu memiliki : <span>transaksi</span></h3>
            <div class="checkout-right">
                    <table id="dataTable" class="table table-bordered table-striped table-hover table-datatable">
                        <thead bgcolor="lightgray">
                        <tr>
                            <th width="1%">No</th>
                            <th>Kode Order</th>
                            <th>Tanggal Order</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $cart = mysqli_query($koneksi,"SELECT * FROM cart ORDER BY cart_id");
                        $no = 1;
                        while($d = mysqli_fetch_array($cart)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['orderid'] ?></td>
                            <td><?php echo $d['tglorder'] ?></td>
                            <td><?php echo $d['total_harga'] ?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <?php
                                    if($d['status']=='Payment'){
                                        echo '<a href="confirm_payment.php?id='.$d['cart_id'].'" class="form-control btn-primary">Konfirmasi Pembayaran</a>';
                                    }else if($d['status']=='Diproses'){
                                        echo 'Pesanan Diproses (Pembayaran Diterima)';
                                    }
                                    else if($d['status']=='Siap Ditest'){
                                        echo 'Pesanan Siap Ditest';
                                    } else if($d['status']=='Selesai'){
                                        echo 'Pesanan Selesai';
                                    } else if($d['status']=='Dibatalkan'){
                                        echo 'Pesanan Dibatalkan';
                                    } else {
                                        echo 'On Process';
                                    }
                                    ?>
                                </div>
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>