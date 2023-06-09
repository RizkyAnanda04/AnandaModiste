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
    
    <!-- Font Awesome CDN Link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Link Swiper untuk Slide -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    
    <!-- Script Chatbot -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Style Link -->
    <link rel="stylesheet" type="text/css" href="css/style_home.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <!-- Custom Js File Link  -->
    <script src="js/Script.js"></script>
  </head>
  <body>
  <!-- Header -->
    <header class="heading">
      <section class="header">
        <div class="container-fluid">
          <div class="container-navbar">
            <div class="row">
              <div class="navbar">
                <a href="#home" class="navbar-brand" style="text-decoration:none"><img src="Gambar/LogoAnandaModiste.png" width="60px" height="60px"><span>Ananda Modiste</span></a>
                <div class="row">
                  <div class="dropdown">
                    <a href="#" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span><span id="notification-btn" class="bi bi-bell-fill"></span></a>
                    <ul class="dropdown-menu"></ul>
                    <a href=""><span id="message-btn" class="bi bi-whatsapp"></span></a>
                    <a href="cart.php"><span class="badge text-bg-secondary"></span><span id="cart-btn" class="bi bi-cart-fill"></span></a>
                    <ul class="dropdown-menu"></ul>
                    <a style="text-decoration:none" href="login.php">Login</a>
                    <span style="font-size:1.8rem">|</span>
                    <a style="text-decoration:none" href="register.php">Register</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
   </header>

   <!-- Navbar -->
   <section class="flex">
      <nav class="navbar navbar-expand-lg navbar-light p-lg-0"> 
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" style="text-decoration:none" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#galeri">Galeri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#rekomendasi">Rekomendasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="kategori.php">Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="model_all.php">Model</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="status.php">Status</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
   </section>

<!-- home section -->
<section class="home" id="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(Galeri/bg-Home.png) no-repeat">
         </div>
         <div class="swiper-slide slide" style="background:url(Galeri/bg-Home1.png) no-repeat">
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>

<!-- sejarah section -->
<section class="home-sejarah" id="sejarah">
   <div class="video">
      <video width="400" height="200" controls muted poster="Galeri/">
         <source src="Galeri/Video Ukuran.mp4" type="video/mp4"/>
      </video>  
   </div>
   <div class="content">
      <h3>Sejarah</h3>
      <hr class="my-4">
      <p style="text-align: justify;">Ananda Modiste (Penjahit Ananda) adalah usaha yang bergerak di bidang jasa dalam membuat busana wanita yang sudah berdiri sejak 27 September 2006. Awal mula didirikan oleh seseorang yang bernama ibu Sripami, beliau menimba ilmu di daerah padang bulan pada saat ber usia 18 tahun. Setelah menimba ilmu selama 3 bulan di tempat tersebut dan memperdalam ilmu secara otodidak, beliau memutuskan untuk membuka usahanya sendiri di tahun 2006 dengan nama Ananda Modiste. Ananda Modiste buka di daerah Simpang Kenanga Raya Tanjung Sari, Medan. Pertama kali buka, pelanggan yang datang banyak yang permak (revarasi pakaian) untuk menarik pelanggan. Dan dengan berjalannya waktu banyak pelanggan yang berdatangan dan menjahit busana wanita seperti kebaya, gaun, blazer, gamis, rok, dan celana. 
      Pada 3 Maret 2011 penjahit Ananda Modiste pindah ke tempat yang lebih besar dan tidak jauh dari toko sebelumnya. Toko Ananda Modiste sekarang berada di dekat Hotel Kailani Inn Tanjung Sari, Medan. Sekarang Ananda Modiste pun memanfaatkan media online untuk menerima pesanan busana wanita dengan mengunjungi website Ananda Modiste. 
      </p>
   </div>
</section>

<!-- galeri section -->
<section class="galeri" id="galeri">
   <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h3 class="">Galeri</h3>
      <hr class="my-4">
   </div>
   <div class="swiper galeri-slider p-2">
      <div class="swiper-wrapper">
         <div class="galeri-img">
            <div class="overflow-hidden">
               <div class="container-fluid main" id="galeri">
                  <div class="row row-cols-1 row-cols-md-4 row-cols-sm-3 row-cols-xxl-5">
                  <?php
                  $galeri = mysqli_query($koneksi,"SELECT * FROM galeri ORDER BY galeri_id");
                  while($d = mysqli_fetch_array($galeri)){
                  ?>
                  <div class="img-box">
                     <img class="img-fluid card-img-top" src="upload_galeri/<?php echo $d['galeri'];?>" alt="">
                  </div>
                  <br>
                  <?php } ?>
               </div>
            </div>
         </div>  
      </div>
      <div class="swiper-pagination"></div>
   </div>
</section>

<!-- rekomendasi section -->
<section class="rekomendasi" id="rekomendasi">
   <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h3>Rekomendasi</h3>
      <hr class="my-4">
   </div>
   <div class="rekomendasi swiper">
      <div class="swiper rekomendasi-busana-slider">
         <div class="card-wrapper swiper-wrapper">
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/rekomendasi(1).jpg" alt="" />
                  </div>
                  <div class="card-body position-relative d-flex justify-content-center" style="margin-top: -19px;">
                     <a class="btn1 btn-square mx-1"  href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn2 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn3 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                  </div>
                  <div class="penjelasan p-2">
                     <h6>Model ini dapat digunakan untuk acara pesta. Model seperti ini cocok untuk yang memiliki badan gemuk dan slim. Bahan yang digunakan harus bahan yang lembut dan jatuh. Jenis bahan yang digunakan boleh polos atau bermotif tetapi untuk yang memiliki badan yang gemuk harus menggunakan bahan yang bermotif kecil.</h6>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/rekomendasi(2).jpg" alt="" />
                  </div>
                  <div class="card-body position-relative d-flex justify-content-center" style="margin-top: -19px;">
                     <a class="btn4 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn5 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn6 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                  </div>
                  <div class="penjelasan p-2">
                     <h6>Model ini dapat digunakan untuk acara pengajian dan pesta. Model seperti ini cocok untuk yang memiliki badan gemuk dan slim. Bahan yang digunakan adalah bahan yang lembut dan jatuh. Jenis bahan yang digunakan boleh polos atau bermotif tetapi untuk badan yang gemuk harus menggunakan bahan yang bermotif kecil.</h6>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/rekomendasi(4).jpg" alt="" />
                  </div>
                  <div class="card-body position-relative d-flex justify-content-center" style="margin-top: -19px;">
                     <a class="btn7 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn8 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn9 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                  </div>
                  <div class="penjelasan p-2">
                     <h6>Model ini dapat digunakan untuk acara pengajian dan pesta. Model seperti ini cocok untuk yang memiliki badan gemuk dan slim. Bahan yang digunakan adalah bahan yang lembut dan kaku. Jenis bahan yang digunakan boleh polos atau bermotif tetapi untuk badan yang gemuk harus menggunakan bahan yang bermotif kecil.</h6>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/rekomendasi(5).jpg" alt="" />
                  </div>
                  <div class="card-body position-relative d-flex justify-content-center" style="margin-top: -19px;">
                     <a class="btn10 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn11 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn12 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                  </div>
                  <div class="penjelasan p-2">
                     <h6>Model ini dapat digunakan untuk kuliah dan kerja. Model seperti ini cocok untuk yang memiliki badan gemuk dan slim. Bahan yang digunakan adalah bahan yang lembut dan jatuh. Jenis bahan yang digunakan boleh polos atau bermotif tetapi bila menggunakan motif garis posisi jangan melintang dan untuk badan gemuk menggunakan motif kecil.</h6>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/rekomendasi(6).jpg" alt="" />
                  </div>
                  <div class="card-body position-relative d-flex justify-content-center" style="margin-top: -19px;">
                     <a class="btn13 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn14 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn15 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                  </div>
                  <div class="penjelasan p-2">
                     <h6>Model ini dapat digunakan untuk kerja. Model seperti ini cocok untuk yang memiliki badan gemuk dan slim. Bahan yang digunakan untuk blazer sebaiknya bahan yang lembut dan kaku. Sedangkan bahan yang digunakan untuk rok sebaiknya bahan yang lembut dan jatuh. Jenis bahan yang digunakan sebaiknya bahan polos.</h6>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/rekomendasi(8).jpg" alt="" />
                  </div>
                  <div class="card-body position-relative d-flex justify-content-center" style="margin-top: -19px;">
                     <a class="btn16 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn17 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn18 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                  </div>
                  <div class="penjelasan p-2">
                     <h6>Model ini dapat digunakan untuk acara pesta dan acara resmi. Model seperti ini cocok untuk yang memiliki badan slim. Bahan yang digunakan untuk blouse sebaiknya bahan yang lembut dan jatuh. Sedangkan bahan yang digunakan untuk rok sebaiknya bahan yang kaku. Dan jenis bahan yang digunakan boleh polos atau bermotif.</h6>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/rekomendasi(18).jpg" alt="" />
                  </div>
                  <div class="card-body position-relative d-flex justify-content-center" style="margin-top: -19px;">
                     <a class="btn19 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn20 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn21 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                  </div>
                  <div class="penjelasan p-2">
                     <h6>Model gaun ini dapat digunakan untuk acara pesta. Model seperti ini cocok untuk yang memiliki badan slim. Bahan yang digunakan untuk gaun adalah bahan yang lembut dan jatuh. Jenis bahan utamanya adalah renda dan bahan untuk lapisnya adalah bahan polos dan warnanya sesuaikan dengan warna renda.</h6>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/rekomendasi(20).jpg" alt="" />
                  </div>
                  <div class="card-body position-relative d-flex justify-content-center" style="margin-top: -19px;">
                     <a class="btn22 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn23 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn24 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                  </div>
                  <div class="penjelasan p-2">
                     <h6>Model ini dapat digunakan untuk acara resmi, pesta, dan pengajian. Model seperti ini cocok untuk yang memiliki badan slim. Bahan yang digunakan adalah bahan yang lembut dan jatuh. Jenis bahan yang digunakan boleh polos atau bermotif. Dan ditambahi bahan tile untuk menambah kesan yang cantik dibagian tangan.</h6>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/rekomendasi(15).jpg" alt="" />
                  </div>
                  <div class="card-body position-relative d-flex justify-content-center" style="margin-top: -19px;">
                     <a class="btn25 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn26 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn27 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                  </div>
                  <div class="penjelasan p-2">
                     <h6>Model khas bali ini dapat digunakan untuk kegiatan menari, ibadah, dan acara-acara adat. Model seperti ini cocok untuk yang memiliki badan slim dan gemuk. Jenis bahan yang digunakan berenda untuk bahan atasannya. Untuk bahan rok menggunakan bahan batik dan untuk bahan obinya menggunakan bahan yang jatuh dan polos.</h6>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="card shadow">
                  <div class="image-box">
                    <img src="Galeri/rekomendasi(16).jpg" alt="" />
                  </div>
                  <div class="card-body position-relative d-flex justify-content-center" style="margin-top: -19px;">
                     <a class="btn28 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn29 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                     <a class="btn30 btn-square mx-1" href=""><i class='fas fa-tshirt'></i></a>
                  </div>
                  <div class="penjelasan p-2">
                     <h6>Model ini dapat digunakan untuk sehari-hari. Model seperti ini cocok untuk yang memiliki badan slim. Bahan yang digunakan untuk baju sebaiknya bahan yang lembut dan jatuh. Jenis bahan yang digunakan bahan yang polos. Sedangkan bahan yang digunakan untuk rok sebaiknya bahan yang jatuh dan jenis bahan polos. </h6>
                  </div>
               </div>
            </div>
         </div>
      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <br>
      <br>
      <div class="swiper-pagination"></div>
   </div>
</section>

<!-- contact section -->
<section class="contact">
   <h3>Contact</h3>
   <hr class="my-4">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1147736046005!2d98.62938441373574!3d3.561035751478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fbdf6bf815d%3A0x424ffac64ec2d0f!2sJl.%20Kenanga%20Raya%20No.39%2C%20Tj.%20Sari%2C%20Kec.%20Medan%20Selayang%2C%20Kota%20Medan%2C%20Sumatera%20Utara%2020122!5e0!3m2!1sid!2sid!4v1679471726193!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   <div class="box-container">
      <div class="card shadow">
         <div class="card-body position-relative d-flex justify-content-center" style="margin-top: -19px;">
            <a class="btn-contact btn-square mx-1" href=""><i class="bi bi-telephone-fill"></i></a>
         </div>
         <h3>Hubungi Ke</h3>
         <p>081362483755</p>
       </div>
      <div class="card shadow">
         <div class="card-body position-relative d-flex justify-content-center" style="margin-top: -19px;">
            <a class="btn-contact btn-square mx-1" href="home.php"><i class="bi bi-clock-fill"></i></a>
         </div>
         <h3>Buka Jam</h3>
         <p>11.00-20.00</p>
      </div>
      <div class="card shadow">
         <div class="card-body position-relative d-flex justify-content-center" style="margin-top: -19px;">
            <a class="btn-contact btn-square mx-1" href="mailto:anandamodiste0309@gmail.com"><i class="bi bi-envelope-fill"></i></a>
         </div>
         <h3>Email</h3>
         <p>anandamodiste0309@gmail.com</p>
      </div>
      <div class="card shadow">
         <div class="card-body position-relative d-flex justify-content-center" style="margin-top: -19px;">
            <a class="btn-contact btn-square mx-1" href="https://goo.gl/maps/mv9geZcmzEEYLs3cA"><i class="bi bi-pin-map-fill"></i></a>
         </div>
         <h3>Alamat</h3>
         <p>Jalan Kenanga Raya</p>
      </div>
   </div>
</section>

<!-- Back to Top -->
<a href="#home" class="btn-back btn-lg btn-secondary btn-lg-square back-to-top d-flex justify-content-center"><i class="bi bi-arrow-up"></i></a>

<!--Chatbot-->
<div id="chatBtn"></div>

<script>
   $(function() {
      $("#chatBtn").load("Chatbot/Chatbot.php")
   })
</script>

<?php include 'footer.php'; ?>