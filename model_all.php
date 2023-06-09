<?php 
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
    <div class="container w-200 p-5 shadow rounded col-lg-12">
      <div class="row">
        <div class="container-heading">
            <h3 class="title">Model</h3>
        </div>
        <br>
        <br>
        &nbsp;
        <div class="container-fluid main" id="model">
          <div class="row row-cols-1 row-cols-md-4 row-cols-sm-3 row-cols-xxl-5">
            <?php 
            $model = mysqli_query($koneksi,"SELECT * FROM model ORDER BY model_id");
            while($d = mysqli_fetch_array($model)){
            ?>
            <div class="col-lg-3">
              <div class="card shadow">
                <img src="upload_img/<?php echo $d['gambar'];?>" class="card-img-top" alt="" height="200px">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $d['model_nama'] ?></h5>
                  <p class="card-text">Rp <?php echo $d['harga'] ?></p>
                  <a href="pemesanan_kategori_baju.php" class="btn btn-secondary">Pesan</a>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>