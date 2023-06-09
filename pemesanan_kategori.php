<?php 
session_start();
include 'koneksi.php';
?>
<?php include 'header.php'; ?>
<div class="container w-200 p-5 shadow rounded col-lg-6">
  <div class="row">
    <div class="container-heading">
      <h3 class="title">Pemesanan</h3>
    </div>

    <div class="float-end">
      <br>
      <a href="kategori.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>

    <section class="pemesanan" id="pemesanan">
      <div class="pemesanan swiper">
        <div class="swiper pemesanan-slider">
         <div class="card-wrapper swiper-wrapper">
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/ukuran.jpg" alt="" />
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/ukuran1.jpg" alt="" />
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/ukuran2.jpg" alt="" />
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/ukuran3.jpg" alt="" />
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/ukuran4.jpg" alt="" />
                  </div>
               </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <br>
        <div class="swiper-pagination"></div>
       </div>
    </section>

    <div class="container-fluid main" id="kategori">
      <div class="row">
        &emsp;
        <form method="post" enctype="multipart/form-data" action="pemesanan_kategori_aksi.php">
          <span>Data Model</span>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Model</label>
            <input type="text" class="form-control" name="model_nama" required="required" value="<?php echo $d['model_nama']; ?>">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Foto Model</label><br>
            <input type="file" name="foto_model">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga" required="required" value="<?php echo $d['harga']; ?>">
          </div>
          <span>Ukuran Baju</span>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Lebar Pundak</label>
            <input type="text" class="form-control" name="ukuran_baju_lp" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Lebar Muka</label>
            <input type="text" class="form-control" name="ukuran_baju_lm" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Panjang Muka</label>
            <input type="text" class="form-control" name="ukuran_baju_pm" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Besar Badan</label>
            <input type="text" class="form-control" name="ukuran_baju_bb" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Lebar Punggung</label>
            <input type="text" class="form-control" name="ukuran_baju_lpg" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Panjang Punggung</label>
            <input type="text" class="form-control" name="ukuran_baju_pp" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Lingkar Pinggang</label>
            <input type="text" class="form-control" name="ukuran_baju_lkrpu" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Lingkar Pinggul</label>
            <input type="text" class="form-control" name="ukuran_baju_lkrpi" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Panjang Tangan</label>
            <input type="text" class="form-control" name="ukuran_baju_pt" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Lingkar Tangan</label>
            <input type="text" class="form-control" name="ukuran_baju_lt" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Panjang Baju</label>
            <input type="text" class="form-control" name="ukuran_baju_pb" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Kerung Lengan</label>
            <input type="text" class="form-control" name="ukuran_baju_kl" required="required">
          </div> 
          <span>Ukuran Celana</span>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Lingkar Pinggang</label>
            <input type="text" class="form-control" name="ukuran_celana_lp" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Lingkar Pinggul</label>
            <input type="text" class="form-control" name="ukuran_celana_lpg" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Pisak</label>
            <input type="text" class="form-control" name="ukuran_celana_p" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Lingkar Paha</label>
            <input type="text" class="form-control" name="ukuran_celana_lph" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Lingkar Lutut</label>
            <input type="text" class="form-control" name="ukuran_celana_ll" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Lingkar Kaki</label>
            <input type="text" class="form-control" name="ukuran_celana_lk" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Panjang Celana</label>
            <input type="text" class="form-control" name="ukuran_celana_pc" required="required">
          </div>
          <span>Ukuran Rok</span>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Lingkar Pinggang</label>
            <input type="text" class="form-control" name="ukuran_rok_lp" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Lingkar Pinggul</label>
            <input type="text" class="form-control" name="ukuran_rok_lpg" required="required">
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Panjang Rok</label>
            <input type="text" class="form-control" name="ukuran_rok_pr" required="required">
          </div>
          <span>Data Tambahan</span>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Tanggal Pesan</label>
            <input type="date" name="tglpesan" class="form-control" required>
          </div>
          <div class="mb-3 col-lg-12">
            <label class="form-label">Tanggal Selesai</label>
            <input type="date" name="tglselesai" class="form-control" required>
            </div> 
          <br>&emsp;
          <div class="mb-3 col-lg-12 float-center">
            <button type="submit" class="btn btn-secondary btn-lg" name="add_pemesanan" value="Add to cart">Pesan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>