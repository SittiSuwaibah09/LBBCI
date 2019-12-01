<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>LBBCI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= base_url('asetawal/'); ?>img/logo.jpg" rel="icon">

  <!-- Google Fonts -->
  <link href="<?= base_url('asetawal/'); ?>https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url('asetawal/'); ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url('asetawal/'); ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url('asetawal/'); ?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('asetawal/'); ?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url('asetawal/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url('asetawal/'); ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url('asetawal/'); ?>css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <img src="<?= base_url('asetawal/'); ?>img/logo.jpg" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= base_url('auth/index'); ?>">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Informasi Les</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="<?= base_url('auth/log'); ?>">Login</a></li>
          <li><a href="<?= base_url('auth/registration'); ?>">Registrasi</a></li>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="<?= base_url('asetawal/'); ?>img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>LBBCI provide<br><span>solutions</span><br>for your Education!</h2>
        <div>
        </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Lembaga Bimbingan Belajar Cinta Indonesia (LBB CI) memberikan les private dan les reguler untuk pelajaran sekolah dan persiapan ujian.
          </p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              Kami ada untuk memberi solusi dan kemudahan bagi siswa dan orang tua. Solusi untuk mengatasi masalah pelajaran di sekolah. Jadi,putra-putri tercinta dapat beradaptasi, seraya terus mengembangkan minat dan bakatnya. Kembangkan minat dan bakat putra-putri tercinta, masalah pelajaran biar kami yang membantu.
              <br>
              <br>
              Berikut Les yang ada di LBBCI :
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fas fa-book"></i></div>
              <h4 class="title"><a href="<?= base_url(''); ?>">Les Private</a></h4>
              <p class="description">Tentor mendatangi rumah siswa</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fas fa-book"></i></div>
              <h4 class="title"><a href="<?= base_url('asetawal/'); ?>">Les Reguler</a></h4>
              <p class="description">Siswa mendatangi tempat les LBBCI</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="<?= base_url('asetawal/'); ?>img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="<?= base_url('asetawal/'); ?>img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Mengapa Les di LBBCI ?</h4>
            <li>Tentor berkompeten, berasal dari perguruan tinggi kependidikan yang sudah diseleksi.</li>
            <li>Jadwal fleksibel, dapat disesuaikan dengan permintaan siswa.</li>
            <li>Jumlah pertemuan les dan materi pelajaran disesuaikan dengan kebutuhan siswa.</li>
            <li>Siswa akan mendapat latihan soal dan pembahasan PR.</li>
            <li>Untuk siswa les private ada laporan materi bulanan untuk orang tua.</li>
          </div>
        </div>
      </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Informasi Les</h3>
          <p>Berikut informasi mengenai les di LBBCI</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title">Les Private</h4>
              <p class="description">
                > Guru datang ke rumah siswa<br>
                > Lama belajar untuk 1x pertemuan:1,5 jam<br>
                > Jumlah pertemuan ditentukan di awal les<br>
                > Pembayaran untuk 1 bulan dilakukan di awal bulan sesuai dengan jumlah rencana les yang akan ditempuh<br>
                > Pelajaran yang diberikan untuk les private sesuai dengan permintaan siswa dan kesepakatan dilakukan di awal les
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title">Biaya Les Private</h4>
              <p class="description">
                TK => Rp 20.000 /pertemuan<br>
                SD => Rp 25.000 /pertemuan<br>
                SMP => Rp 30.000 /pertemuan<br>
                SMA => Rp 35.000 /pertemuan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title">Les Reguler</h4>
              <p class="description">
                > Siswa datang ke tempat les<br>
                > Jumlah pertemuan 2x perminggu@1,5 jam<br>
                > Pelajaran yang diberikan untuk les regular:<br>
                1.SD:semua pelajaran<br>
                2.SMP: matematika-IPA-Bahasa Inggris<br>
                3.SMA IPA: matematika-fisika-kimia<br>
                4.SMA IPS: matematika-akutansi-Bahasa Inggris</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-bookmarks-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="<?= base_url('asetawal/'); ?>">Biaya Les Reguler</a></h4>
              <p class="description">
                > SD = Rp 60.000 /bulan
                > SMP = Rp 70.000 /bulan<br>
                > SMA = Rp 90.000 /bulan<br>
                *dilunasi di awal bulan selambat-lambatnya tanggal 5</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>Berikut team LBBCI</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="<?= base_url('asetawal/'); ?>img/Copy.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>ARIES BUDI PANGESTU</h4>
                  <span>NIM 160411100141</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="<?= base_url('asetawal/'); ?>img/tiga.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>SITTI SUWAIBAH</h4>
                  <span>NIM 170411100009</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="<?= base_url('asetawal/'); ?>img/dua.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>M. ALAUDDIN HELMI</h4>
                  <span>NIM 170411100115</span>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="col-lg-12">
          <div class="row">
            <div class="col-md-5 info">
              <i class="ion-ios-location-outline"></i>
              <p>Jl. HOS Cokroaminoto No. 11 Bangkalan</p>
            </div>
            <div class="col-md-3 info">
              <i class="ion-ios-email-outline"></i>
              <p>LBBCI@gmail.com</p>
            </div>
            <div class="col-md-4 info">
              <i class="ion-ios-telephone-outline"></i>
              <p>0878-5162-8746(WA)/0823-3255-0549(SMS)</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>LBBCI</strong>
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->

      </div>
    </div>
  </footer><!-- #footer -->

  <a href="<?= base_url('asetawal/'); ?>#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?= base_url('asetawal/'); ?>lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url('asetawal/'); ?>lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url('asetawal/'); ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('asetawal/'); ?>lib/easing/easing.min.js"></script>
  <script src="<?= base_url('asetawal/'); ?>lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?= base_url('asetawal/'); ?>lib/wow/wow.min.js"></script>
  <script src="<?= base_url('asetawal/'); ?>lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url('asetawal/'); ?>lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url('asetawal/'); ?>lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('asetawal/'); ?>lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('asetawal/'); ?>lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url('asetawal/'); ?>contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url('asetawal/'); ?>js/main.js"></script>

</body>

</html>