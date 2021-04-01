<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Saving Page | My Wallet</title>
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

        <h1 class="text-light" style="font-weight: lighter;"> Your Balance </h1>
        <h1 class="text-light"> Rp.5.000.000 </h1>
      </div>

      <div class="navbar" style="background-color: #377E9A">
        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li><a href="<?= base_url('/Home/dashboard'); ?>" class="nav-link scrollto "><i class="bx bx-home"></i> <span>Dashboard</span></a></li>
            <li><a href="<?= base_url('/PemasukandanPengeluaran/dashboardincomespending'); ?>" class="nav-link scrollto"><i class="bx bx-sort-alt-2"></i> <span>Income & Spending</span></a></li>
            <li><a href="<?= base_url('/'); ?>#" class="nav-link scrollto active"><i class="bx bx-credit-card-front"></i> <span>Saving</span></a></li>
            <li><a href="<?= base_url('/Pinjaman/dashboardloan'); ?>" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Loan</span></a></li>
            <li><a href="<?= base_url('/Home/dashboardsavingpredictio'); ?>" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Saving Prediction</span></a></li>
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
        <h1>Saving Page</h1>
        <p>Saving page showing your saving record from old to latest your saving activity.
          also you can also see your target saving for your wish list item.</p>
      </div>


      <div class="moneySection">
        <div class="spending">
          <p> Money Saving Today </p>
          <h2 class="rupiah">Rp 100.000</h2>
        </div>
        <div class="saving">
          <p> Your Total Saving Money </p>
          <h2 class="rupiah">Rp 100.000</h1>
        </div>
        <!-- <div class=" income">
            <p> Income today </p>
            <h1 class="rupiah">Rp 100.000</h1>
        </div> -->
      </div>

      <div class="recordSection">
        <div class="row">

          <!--Activities-->
          <div class="col-md-6">
            <div class="activities">
              <!-- <img src= "/assets\img\dasboard\wallet-activity.png" width="168px" height="109px" class="gambarSection"> -->
              <div style="margin-top: 40px; padding-right: 30px">
                <h2 style="color:#247291; font-weight: bolder">Saving Record</h2>
                <p>Record your income activity, from you start to finish your income
                  record. you can print your income record too.</p>
                <a href="<?= base_url('/PemasukandanPengeluaran/detailpagespending'); ?>" class="btn-statistik scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Detail</span><i class="bx bx-detail"></i>
                </a>
              </div><br><br>
              <div class="isiActivities">
                <?php foreach ($tabungan as $tabungan) : ?>
                <table style="width: 100%;">
                    <tr>
                      <td rowspan="2" style="width: 30px">
                        <img src="/assets\img\dasboard\raise.png" style="margin-right: 15px">
                      </td>
                      <td>
                      <?= $tabungan['detail_tabungan']; ?>
                      </td>
                      <td style="text-align: right;">
                        <?= $tabungan['tanggal_tabungan']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="3">
                        <h3 style="font-family: 'lato'"><strong> Rp. <?= $tabungan['nominal_tabungan']; ?></strong></h3>
                      </td>
                    </tr>
                  </table>
                  <br>
                  <?php endforeach; ?>


              </div>
            </div>
          </div>

          <!--Your Target-->
          <div class="col-md-5">
            <div class="yourTarget">
              <!-- <img src= "/assets\img\dasboard\wallet-target.png" width="168px" height="109px" class="gambarSection"> -->
              <div style="margin-top: 40px; padding-right: 30px">
                <h2 style="color:#247291; font-weight: bolder">Target Wish List</h2>
                <p>Record your target wishlish. this target will be adding money form saving cash. complete the target to make your wish come true</p>
              </div><br><br>
              <div class="isiYourTargetContainer">
                <div class="isiYourTarget">
                  <p>PlayStation 5</p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="isiYourTarget">
                  <p>Samsung Galaxy A52 5G</p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="isiYourTarget">
                  <p>Jalan Bareng Doi</p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="isiYourTarget">
                  <p>Trip Bareng Geng Kepompong</p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
  <!-- End #main -->


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