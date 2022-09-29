<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>LLDIKTI</title>
</head>
<body>

<div class="content">
      <nav>
        <div class="nav-brand">
          <a href="index.php">
            <img class="logo" src="img/logo.png" alt="logo">
          </a>
        </div>
        <div class="nav-menu">
          <ul class="dropdown">
            <a href="index.php?page=profile">Profil</a>
              <div class="dropdownlist">
                <li><a href="index.php?page=profile_lddikti4">Profil lldikti4</a></li>
                <li><a href="index.php?page=profile_kepala_lddikti4">Profil Kepala lldikti4</a></li>
              </div>
          </ul>
            <a href="index.php?page=info">Info</a>
            <a href="index.php?page=akuntabilitas">Akuntabilitas</a>
            <a href="index.php?page=berita">Berita</a>
            <ul class="dropdown">
              <a href="index.php?page=layanan">Layanan</a>
                <div class="dropdownlist">
                  <li><a href="index.php?page=layanan_online">Layanan Online</a></li>
                  <li><a href="index.php?page=layanan_kami">Layanan Kami</a></li>
                  <li><a href="index.php?page=pengajuan_layanan">Pengajuan Layanan</a></li>
                </div>
            </ul>
            <a href="">Informasi Publik</a>
        </div>
        <div class="mode-toggle">
            <input type="checkbox" class="checkbox" id="chk" />
            <label class="label" for="chk">
                <i class="fas fa-moon"></i>
                <i class="fas fa-sun"></i>
                <div class="ball"></div>
            </label>
        </div>
        <div class="menu-toggle">
          <input type="checkbox">
          <span></span>
          <span></span>
          <span></span>
        </div>
    </nav>
	<div class="badan">
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'profile':
				include "halaman/profile.php";
				break;
      case 'profile_lddikti4';
        include "halaman/profile_lldikti4.php";
        break;
      case 'profile_kepala_lddikti4';
        include "halaman/profile_kepala_lddikti4.php";
        break;
      case 'info';
        include "halaman/info.php";
        break;
      case 'akuntabilitas';
        include "halaman/akuntabilitas.php";
        break;
      case 'berita';
        include "halaman/berita.php";
        break;
      case 'layanan';
        include "halaman/layanan.php";
        break;
      case 'layanan_online';
        include "halaman/layanan_online.php";
        break;
      case 'layanan_kami';
        include "halaman/layanan_kami.php";
        break;
      case 'pengajuan_layanan';
        include "halaman/pengajuan_layanan.php";
        break;
						
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
     <!-- footer -->
         <footer>
      <div class="students">
          <div class="text">
              <h1>Butuh Bantuan Lebih Lanjut ?</h1>
          </div>
          <div class="button">
              <a href="">HUBUNGI KAMI</a>
          </div>
      </div>
      <footer class="footer">
          <div class="contact">
              <div class="address-footer">
                  <h4>Address</h4>
                  <p class="description">LLDIKTI Wilayah 4 memiliki tugas melaksanakan fasilitasi peningkatan mutu penyelenggaraan pendidikan tinggi di provinsi Jawa Barat. Dalam melaksanakan tugas fasilitasi peningkatan mutu tersebut.</p>
                  <p><i class="fa fa-phone footer-icon"></i> +022 7275630, +022 7274377</p>
                  <p><i class="fa fa-envelope footer-icon"></i>  informasi@lldikti4.or.id</p>
                  <p><i class="fa fa-map-marker footer-icon"></i> Jalan Penghulu H. Hasan Mustofa No. 38 Bandung 40124</p>
              </div>
              <div class="study-footer">
                  <h4>Study</h4>
                  <p><i class="fa fa-long-arrow-right footer-icon"></i> Guru Besar/</p>
                  <p><i class="fa fa-long-arrow-right footer-icon"></i> Doktor/</p>
                  <p><i class="fa fa-long-arrow-right footer-icon"></i> Data Kelembaga</p>
                  <p><i class="fa fa-long-arrow-right footer-icon"></i> Informasi Kegiatan</p>
                  <p><i class="fa fa-long-arrow-right footer-icon"></i> Beasiswa Dosen</p>
                  <p><i class="fa fa-long-arrow-right footer-icon"></i> Informasi Kampus</p>
              </div>
              <div class="links-footer">
                  <h4>Links</h4>
                  <p><i class="fa fa-long-arrow-right footer-icon"></i> Home</p>
                  <p><i class="fa fa-long-arrow-right footer-icon"></i> Profil</p>
                  <p><i class="fa fa-long-arrow-right footer-icon"></i> Info</p>
                  <p><i class="fa fa-long-arrow-right footer-icon"></i> Akuntabilitas</p>
                  <p><i class="fa fa-long-arrow-right footer-icon"></i> Berita</p>
                  <p><i class="fa fa-long-arrow-right footer-icon"></i> Layanan</p>
                  <p><i class="fa fa-long-arrow-right footer-icon"></i> Informasi Publik</p>
              </div>
              <div class="email-footer">
                  <h4>Email</h4>
                  <p>Enter your email and we'll send you more information.</p>
                  <input type="email" placeholder="Input Your Email">
                  <a href="">SUBSCRIBE</a>
              </div>
          </div>
          <div class="copyright">
              <p>© Copyright 2022 Poljan | All rights reserved</p>
          </div>
      </footer>
  <section class="social-media-floating" onclick="toggleBtnSocial()">
    <div class="action">
      <i class="fas fa-plus" id="add"></i>
      <i class="fas fa-times" id="remove"></i>
    </div>
    <div class="btns">
      <a href="#" class="btn" style="background: #1DA1F2;">
        <i class="fab fa-twitter" ></i>
      </a>
      <a href="#" class="btn" style="background: #25D366;">
        <i class="fab fa-whatsapp"></i>
      </a>
      <a href="#" class="btn"style="background: #1877F2;">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="#" class="btn"style="background: #CD201F;">
        <i class="fab fa-youtube"></i>
      </a>
      <a href="#" class="btn"style="background: #E4405F;">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
  </section>
</div>
<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<script src="js/lightbox-plus-jquery.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>