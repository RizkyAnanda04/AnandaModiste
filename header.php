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
    <?php
    include 'koneksi.php';
    if($_SESSION['status']!="user_login"){
      header("location:login.php?alert=belum_login");
    }
    ?>
  <!-- Header -->
    <header class="heading">
      <section class="header">
        <div class="container-fluid">
          <div class="container-navbar">
            <div class="navbar">
              <a href="#home" class="navbar-brand" style="text-decoration:none"><img src="Gambar/LogoAnandaModiste.png" width="60px" height="60px"><span>Ananda Modiste</span></a>
              <div class="row">
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span><span id="notification-btn" class="bi bi-bell-fill"></span></a>
                  <ul class="dropdown-menu"></ul>
                  <a href="https://api.whatsapp.com/send?phone=6281362483755"><span id="message-btn" class="bi bi-whatsapp"></span></a>
                  <a href="cart.php"><span class="badge text-bg-secondary"></span><span id="cart-btn" class="bi bi-cart-fill"></span></a>
                  <ul class="dropdown-menu"></ul>
                  <a class="dropdown-toggle" style="text-decoration:none"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php
                  $id = $_SESSION['id'];
                  $profil = mysqli_query($koneksi,"SELECT * FROM user WHERE user_id='$id'");
                  $p = mysqli_fetch_assoc($profil);
                  if($p['user_foto'] == ""){
                  ?>
                  <img src="Gambar/user.png" style="width: 20px; height: 20px;">
                  <?php }else{ ?>
                  <img src="Gambar/<?php echo $p['user_foto'] ?>" style="width: 20px; height: 20px;">
                  <?php } ?>
                  <span class="user-nama"><?php echo $_SESSION['username']; ?> <b>[Pelanggan]</b></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="profil_user.php" aria-expanded="false">
                        <span class="bi bi-person" aria-hidden="true"></span>Profil Saya
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="gantipassword.php" aria-expanded="false">
                        <span class="bi bi-arrow-left-right" aria-hidden="true"></span>Ganti Password
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="logout.php" aria-expanded="false">
                        <span class="bi bi-box-arrow-right" aria-hidden="true"></span>Log Out
                      </a>
                    </li>
                  </ul>
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
                <a class="nav-link active" style="text-decoration:none" aria-current="page" href="index.php">Home</a>
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