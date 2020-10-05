<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User Landing page</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Landing page/assets/img/favicon.png" rel="icon">
  <link href="Landing page/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Landing page/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Landing page/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="Landing page/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Landing page/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="Landing page/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="Landing page/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Landing page/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland - v2.2.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Programe Word</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#faq">F.A.Q</a></li>
          <li><a href="#contact">Contact Us</a></li>

          <li class="get-started"><a href="#features">Log Out</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Welcome {{$student->username}} to our page</h1>
            <h2>We introduce eveyone with programming in friendly manner</h2>
            <a href="#" class="download-btn">Get Started</a>
            <a href="\profile\{{$student->id}}" class="download-btn">Profile</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>App Features</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        
    </section><!-- End App Features Section -->

   

    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
            <h3>Program Word</h3>
            <p>
              Khulna-Satkhira Street <br>
              Khulna<br>
              Bangladesh <br><br>
              <strong>Phone:</strong> +8801960454442<br>
              <strong>Email:</strong> emon180231@gmail.com<br>
              <strong>Email:</strong> mahbub180212@gmail.com<br>
            </p>
          </div>



          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Main</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Our Social Networks</h4>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

   
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="Landing page/assets/vendor/jquery/jquery.min.js"></script>
  <script src="Landing page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Landing page/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="Landing page/assets/vendor/php-email-form/validate.js"></script>
  <script src="Landing page/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="Landing page/assets/vendor/venobox/venobox.min.js"></script>
  <script src="Landing page/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="Landing page/assets/js/main.js"></script>

</body>

</html>