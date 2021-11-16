@extends('layouts.mainlogin')

@section('container')

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Learning TIK</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v4.6.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/">E-Learning TIK</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#Fitur">Fitur</a></li>
            <ul>
              
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
          <li><a class="getstarted scrollto" href="/register">Masuk/Daftar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Belajar Asik Belajar Bersama</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Nikmati akses materi secara gratis</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/study.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
<br></br>
<br></br>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
        <br></br>
        <br></br>
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="150">
      
          
            <p>
              Beragam video pembelajaran tersedia di website E-Learning TIK. Banyak keuntungan yang bisa kamu akses seperti :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Course</li>
              <li><i class="ri-check-double-line"></i> Quiz</li>
              <li><i class="ri-check-double-line"></i> Forum</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
             Website ini bisa diakses kapanpun dan dimanapun asalkan pengguna terhubung ke internet. 
             Adanya E-Learning TIK ini diharapkan dapat membantu untuk belajar Teknologi Informasi dan Komunikasi secara mandiri.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Fitur Section ======= -->
    <section id="Fitur" class="Fitur">
      <div class="container">

        <div class="row">
        <br></br>
        <br></br>
        <br></br>

          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/about us.jpg" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-play-btn"></i>
                    <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Course<br>Terdapat materi pembelajaran mengenai Teknologi Informasi dan Komunikasi</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-play-btn"></i>
                    <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Quiz</strong><br> Terdapat 4 quiz menarik. Menyediakan tes pemahaman mengenai Teknologi Informasi dan Komunikasi</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-play-btn"></i>
                    <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Forum</strong><br>Terdapat forum diskusi. Wadah untuk berdiskusi terkait Teknologi Informasi dan Komunikasi</p>
                  </div>
                </div>

            </div><!-- End .content-->
          </div>
        </div>

      </div>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      

        <div class="section-title" data-aos="fade-up">
          <h2>Kontak Kami</h2>
        </div>




       
    <main>
        

		<div class="contact-info">
        <div class="card" style="background-color: #4682B4">
        <i class="bi bi-envelope" style="color: black"></i>

			<i class="icon" style="color: black"><small>Email</small></i>
            <div class="card-content" style="color: black">
                <h3>Email</h3>
                <span>belajartik@gmail.com</span>
            </div>
        </div>

        <div class="card" style="background-color: #4682B4">
        <i class="bi bi-telephone" style="color: black"></i>
            <i class="icon" style="color: black"><small>Telepon</small></i>
            <div class="card-content" style="color: black">
                <h3>Telepon</h3>
                <span>+6282111222333</span>
            </div>
        </div>

        <div class="card" style="background-color: #4682B4">
        <i class="bi bi-geo-alt" style="color: black"></i>
            <i class="icon" style="color: black"><small>Lokasi</small></i>
            <div class="card-content" style="color: black">
                <h3>Lokasi</h3>
                <span>Surabaya</span>
            </div>
        </div>
    </div>
    </main>
</body>

<div class="hero" id="home">
            <div class="container-fluid">



<div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
            <div class="container-fluid">
                <div class="container">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                    {{ Session::get('success')}}
                    </div>
                @endif
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                        <form action="add" method="post" >
                        @csrf
                            <div class="contact-form">

                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" name="name" placeholder="Nama" required="required" data-validation-required-message="Masukkan nama ..." />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="required" data-validation-required-message="Masukkan email ..." />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subjek" required="required" data-validation-required-message="Masukkan subjek ..." />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" name="message" placeholder="Pesan" required="required" data-validation-required-message="tuliskan Pesan ..."></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" name="sendMessageButton">Kirim</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

	

            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Kelompok 3 Pemrograman Basis Data</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
           
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
@endsection
