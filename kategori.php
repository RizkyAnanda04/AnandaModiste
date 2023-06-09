<?php 
session_start();
include 'koneksi.php';
?>
<?php include 'header.php'; ?>
<div class="container w-200 p-5 shadow rounded col-lg-6">
  <div class="row">
    <div class="container-heading">
      <h3 class="title">Kategori</h3>
    </div>
    <div class="float-end">
      <br>
      <a href="index.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>   
    <form action="model.php" method="get" class="d-flex mt-3" role="search">
      <input class="form-control" type="search" name="cari" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary btn-lg" type="submit" value="Cari">Search</button>
    </form>
    <br>
    <br>
    &nbsp;
    <div class="container-fluid main" id="kategori">
      <div class="row row-cols-1 row-cols-md-4 row-cols-sm-3 row-cols-xxl-5">
        <?php
          if(isset($_GET['cari'])){
          $cari = $_GET['cari'];
          $model = mysqli_query($koneksi,"SELECT * FROM model ORDER BY model_nama like '%".$cari."%'");
          }else{
            $kategori = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY kategori_id");   
          }
          while($d = mysqli_fetch_array($kategori)){
        ?>
        <div class="col-lg-4">
          <div class="card shadow">
            <img src="" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title"><?php echo $d['kategori_nama']?></h5>
              <a href="model.php?kategori_id=<?php echo $d['kategori_id'] ?>">
              <a href="model.php?kategori_id=<?php echo $d['kategori_id'] ?>"><input type="submit" class="btn btn-secondary btn-lg" value="More"/></a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>