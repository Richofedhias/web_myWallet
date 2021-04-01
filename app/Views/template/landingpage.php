<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Wallet - Best Way To Invest Your Money</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style_landing.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="landingpage.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>MyWallet</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#home">Home</a></li>
          <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="#benefit">Benefits</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="<?= base_url('/Login/login'); ?>">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="home" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Best Way to Invest Your Money!</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Now don't be confused to organize and monitor your
            finances, here MyWallet helps you with the problem you
            are complaining benefit!</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="<?= base_url('/Login/login'); ?> " class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/landingpage/wallet-hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our features</h2>
          <p>The features of the My Wallet application offered</p>
        </header>

        <div class="row">

          <div class="col-lg-4 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/landingpage/wallet-features.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <!-- <img src="assets/img/values-1.png" class="img-fluid" alt=""> -->
              <h3>Spending Notes</h3>
              <p>This feature allows the user to record the expenses that have been made starting from nominal to the description of the expenditure.</p>
            </div>
          </div>

          <div class="col-lg-2 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <!-- <img src="assets/img/values-2.png" class="img-fluid" alt=""> -->
              <h3>Income Notes</h3>
              <p>This feature allows users to record their personal income, users can input nominal income and sources of income.</p>
            </div>
          </div>

          <div class="col-lg-2 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <!-- <img src="assets/img/values-3.png" class="img-fluid" alt=""> -->
              <h3>Loaned Notes</h3>
              <p>This feature allows users to record accounts payable and accounts receivable. This feature is intended so that users can find out the amount, who and where they do debt and receivables.</p>
            </div>
          </div>

          <div class="col-lg-2 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <!-- <img src="assets/img/values-3.png" class="img-fluid" alt=""> -->
              <h3>Saves Notes</h3>
              <p>This feature allows users to record the savings they collect. This feature is intended so that users can find out how their savings are progressing and can also see records of their savings.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End features Section -->

    <!-- ======= benefit Section ======= -->
    <section id="benefit" class="benefit">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Benefits With Us</h3>
              <h2>Website and Mobile Based Applications</h2>
              <p>You can easily enter your financial records anywhere, anytime without the hassle, no need to book anymore just with your cellphone</p>
              <!-- <div class="text-center text-lg-start">
                      <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Read More</span>
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div> -->
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/landingpage/wallet-benefit.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="/assets\img\landingpage\wallet-benefit-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="/assets\img\landingpage\wallet-benefit-2.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section>

    <!-- End benefit Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/landingpage/wallet-contact.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Telekomunikasi Street,<br>Bandung, Jawa Barat 40257</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+62 857 0987 5678<br>+62 857 9861 5162</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@mywallet.com<br>contact@mywallet.com</p>
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Our Social Media</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div> -->
            </div>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>MyWallet</span>
            </a>
            <p>Best Way to Invest Your Money!</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Telekomunikasi Street <br>
              Bandung, Jawa Barat 40257<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 857 0987 5678<br>
              <strong>Email:</strong> info@mywallet.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>MyWallet</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>