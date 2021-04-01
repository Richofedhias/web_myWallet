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
  <link href="/assets/css/style_detail.css" rel="stylesheet">

  <style type="text/css">
  </style>
</head>

<body>
  <div class="detailContainer">
    <div class="detailRecord">
      <a href="<?= base_url('/Home/dashboard'); ?>" class="btn-back scrollto d-inline-flex ">
        <i class="bx bx-arrow-back"></i>
      </a>
      <h2>Print your Spending Record</h2>
      <p>Print your record, you can select wich month you want
        to print. so your print result more specific and not long to much.</p>
      <a href="#" class="btn-print scrollto d-inline-flex align-items-center justify-content-center align-self-center">
        <i class="bx bx-printer"></i> <span>Print Your Record</span>
      </a>
      <div id="detailTabel">
        <table class="table table-striped" style="width: 100%; border-bottom: brown;">
          
          <tr>
            <th>Nominal</th>
            <th>Date</th>
            <th>Detail</th>
          </tr>
          <?php foreach ($pengeluaran as $pengeluaran) : ?>
          <tr>
            <td><?= $pengeluaran['nominal_pengeluaran']; ?></td>
            <td><?= $pengeluaran['tanggal_pengeluaran']; ?></td>
            <td><?= $pengeluaran['detail_pengeluaran']; ?></td>
          </tr>
                  
          <?php endforeach; ?>
        </table>
        <br>


      </div>
    </div>
  </div>



</body>

</html>