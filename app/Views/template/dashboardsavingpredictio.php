<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard | My Wallet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style_dashboard.css" rel="stylesheet">

  <style type="text/css">
    .bx:hover {
      background-color: transparent;
    }

    .bx-file-blank:hover {
      color: white
    }
  </style>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="/assets/img/dasboard/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="dashboard.html">Hi, Richo Ferdia</a></h1>
        <br>

        <h2 class="text-light" style="font-weight: lighter;"> Your Balance </h2>
        <h2 class="text-light"> Rp.5.000.000 </h2>
      </div>

      <div class="navbar" style="background-color: #377E9A">
        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li><a href="<?= base_url('/Home/dashboard'); ?>" class="nav-link scrollto "><i class="bx bx-home"></i> <span>Dashboard</span></a></li>
            <li><a href="<?= base_url('/PemasukandanPengeluaran/dashboardincomespending'); ?>" class="nav-link scrollto"><i class="bx bx-sort-alt-2"></i> <span>Income & Spending</span></a></li>
            <li><a href="<?= base_url('/TabungandanTarget/dashboardsaving'); ?>" class="nav-link scrollto"><i class="bx bx-credit-card-front"></i> <span>Saving</span></a></li>
            <li><a href="<?= base_url('/Pinjaman/dashboardloan'); ?>" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Loan</span></a></li>
            <li><a href="<?= base_url('/'); ?>" class="nav-link scrollto active"><i class="bx bx-server"></i> <span>Saving Prediction</span></a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= MAIN ======= -->
  <main id="main">
    <div class="mainContainer">
      <div class="logo">
        <img href="#" src="/assets/img/wallet-logo.png">
      </div><br>

      <div class="judul">
        <h1>Saving Prediction</h1>
        <p>This page is smart! You can predict your savings for your target. Suppose you
          want to save money per month or week. You can see how long you have to save money.</p>
        <a href="#" class="btn-statistik scrollto d-inline-flex align-items-center justify-content-center align-self-center">
          <span>Start Prediction</span>
        </a>       

        
      </div>

      <div class="recordSection">
        <div class="row">

          <div class="incomeSpending">
            <div class="incomeRecord">
              <h2 style="color:#247291; font-weight: bolder">Chart for Monthly saving prediction</h2>
              <div class="isiIncome">
                <img src="/assets/img/dasboard/wallet-graph.png">
                <p>You will get money in ... month</p>
                <h2>Rp 30.000.000</h2>
              </div>
            </div>

            <div class="spendingRecord">
              <h2 style="color:#247291; font-weight: bolder">Chart for Weekly saving prediction</h2>
              <div class="isiSpending">
                <img src="/assets/img/dasboard/wallet-graph.png">
                <p>You will get money in ... week</p>
                <h2>Rp 13.000.000</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/purecounter/purecounter.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/typed.js/typed.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>