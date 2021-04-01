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
            <li><a href="/" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Dashboard</span></a></li>
            <li><a href="<?= base_url('/PemasukandanPengeluaran/dashboardincomespending'); ?>" class="nav-link scrollto"><i class="bx bx-sort-alt-2"></i> <span>Income & Spending</span></a></li>
            <li><a href="<?= base_url('/TabungandanTarget/dashboardsaving'); ?>" class="nav-link scrollto"><i class="bx bx-credit-card-front"></i> <span>Saving</span></a></li>
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
        <h1>Dashboard</h1>
        <p>The dashboard page displays a review of your transaction activity in the last time. including displaying your income, spending, loaned, and your target savings </p>
      </div>

      <div class="moneySection">
        <div class="spending">
          <p> Spending today </p>
          <h2 class="rupiah">Rp 100.000</h2>
        </div>
        <div class="saving">
          <p> Saving today </p>
          <h2 class="rupiah">Rp 100.000</h1>
        </div>
        <div class="income">
          <p> Income today </p>
          <h2 class="rupiah">Rp 100.000</h2>
        </div>
      </div>

      <div class="recordSection">
        <div class="row">

          <!--Activities-->
          <div class="col-md-6">
            <div class="activities">
              <img src="/assets\img\dasboard\wallet-activity.png" width="168px" height="109px" class="gambarSection">
              <div style="margin-top: 40px; padding-right: 30px">
                <h2 style="color:#247291; font-weight: bolder">Activity</h2>
                <p>This showing your transaction activity from your <strong>spending, saving, income, and loaned. </strong> </p>
              </div><br><br>
              <div class="isiActivities">
                <table style="width: 100%;">
                  <tr>
                    <td rowspan="2" style="width: 30px">
                      <img src="/assets\img\dasboard\indikator.png" style="margin-right: 15px">
                    </td>
                    <td>
                      Nasi goreng
                    </td>
                    <td style="text-align: right;">
                      19/03/2021
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <h3 style="font-family: 'lato'"><strong>Rp30.000</strong></h3>
                    </td>
                  </tr>
                </table>
                <br>
                <table style="width: 100%;">
                  <tr>
                    <td rowspan="2" style="width: 30px">
                      <img src="/assets\img\dasboard\indikator.png" style="margin-right: 15px">
                    </td>
                    <td>
                      Nasi goreng
                    </td>
                    <td style="text-align: right;">
                      19/03/2021
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <h3 style="font-family: 'lato'"><strong>Rp30.000</strong></h3>
                    </td>
                  </tr>
                </table>
                <br>
                <table style="width: 100%;">
                  <tr>
                    <td rowspan="2" style="width: 30px">
                      <img src="/assets\img\dasboard\indikator.png" style="margin-right: 15px">
                    </td>
                    <td>
                      Nasi goreng
                    </td>
                    <td style="text-align: right;">
                      19/03/2021
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <h3 style="font-family: 'lato'"><strong>Rp30.000</strong></h3>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <!--Your Target-->
          <div class="col-md-5">
            <div class="yourTarget">
              <img src="/assets\img\dasboard\wallet-target.png" width="168px" height="109px" class="gambarSection">
              <div style="margin-top: 40px; padding-right: 30px">
                <h2 style="color:#247291; font-weight: bolder">Your Target</h2>
                <p>This is target item that you wish with your saving money</p>
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
              </div>
              <p style="text-align: right; padding-right: 50px"><a href="<?= base_url('/TabungandanTarget/dashboardsaving'); ?>">See More</a></p>
            </div>
          </div>
        </div>
        
        <!--Income & Spending-->
        <div class="incomeSpending">
          <div class="incomeRecord">
            <h2 style="color:#247291; font-weight: bolder">Income</h2>
            <p> Showing your latest income activity</p>
            <p style="text-align: right; padding-right: 50px"><a href="<?= base_url('/PemasukandanPengeluaran/dashboardincomespending'); ?>">See More</a></p>
            <div class="isiIncome">
              <?php foreach ($pemasukan as $pemasukan) : ?>
              <table style="width: 100%;">
                  <tr>
                    <td rowspan="2" style="width: 30px">
                      <img src="/assets\img\dasboard\raise.png" style="margin-right: 15px">
                    </td>
                    <td>
                    <?= $pemasukan['detail_pemasukan']; ?>
                    </td>
                    <td style="text-align: right;">
                    <?= $pemasukan['tanggal_pemasukan']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <h3 style="font-family: 'lato'"><strong>Rp <?= $pemasukan['nominal_pemasukan']; ?></strong></h3>
                    </td>
                  </tr>
                </table> 
                <br>
                <?php endforeach; ?>
              <br>

            </div>
          </div>

          <div class="spendingRecord">
            <h2 style="color:#247291; font-weight: bolder">Spending</h2>
            <p> Showing your latest spending activity</p>
            <p style="text-align: right; padding-right: 50px"><a href="<?= base_url('/PemasukandanPengeluaran/dashboardincomespending'); ?>">See More</a></p>
            <div class="isiSpending">
            <?php foreach ($pengeluaran as $pengeluaran) : ?>
            <table style="width: 100%;">
                  <tr>
                    <td rowspan="2" style="width: 30px">
                      <img src="/assets\img\dasboard\indikator.png" style="margin-right: 15px">
                    </td>
                    <td>
                    <?= $pengeluaran['detail_pengeluaran']; ?>
                    </td>
                    <td style="text-align: right;">
                    <?= $pengeluaran['tanggal_pengeluaran']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <h3 style="font-family: 'lato'"><strong>Rp <?= $pengeluaran['nominal_pengeluaran']; ?></strong></h3>
                    </td>
                  </tr>
                </table>
                <br>
              <?php endforeach; ?>
              <br>
            </div>
          </div>
        </div>

        <!--Saving & Loan-->
        <div class="loanSaving">
          <div class="incomeRecord">
            <h2 style="color:#247291; font-weight: bolder">Saving</h2>
            <p> Showing your lates saving activity, from how much money and date your activities.</p>
            <p style="text-align: right; padding-right: 50px"><a href="<?= base_url('/TabungandanTarget/dashboardsaving'); ?>">See More</a></p>
            <div class="isiIncome">
            <?php foreach ($tabungan as $tabungan) : ?>
              <table style="width: 100%;">
                <tr>
                  <td style="font-weight: bolder; font-size: 30px">Rp. <?= $tabungan['nominal_tabungan']; ?></td>
                  <td style="text-align: right;"><?= $tabungan['tanggal_tabungan']; ?></td>
                </tr>
              </table>
              <br>
              <?php endforeach; ?>              
            </div>
          </div>

          <div class="spendingRecord">
            <h2 style="color:#247291; font-weight: bolder">Loan</h2>
            <p> Showing your loaned money, it will show you who, how much, and when your money loaned</p>
            <p style="text-align: right; padding-right: 50px"><a href="<?= base_url('/Pinjaman/dashboardloan'); ?>">See More</a></p>
            <div class="isiSpending">
            <?php foreach ($pinjaman as $pinjaman) : ?>
              <table style="width: 100%;">
                <tr>
                  <td>
                    <h5><?= $pinjaman['nama_peminjam']; ?><h5>
                  </td>
                  <td style="text-align: right;">
                  <?= $pinjaman['tanggal_peminjaman']; ?>
                  </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <h3 style="font-family: 'lato'"><strong>Rp30.000</strong></h3>
                  </td>
                </tr>
              </table>
              <br>
              <?php endforeach; ?>               
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