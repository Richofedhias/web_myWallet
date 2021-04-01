<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login | My Wallet</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style_login.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!--Colom Gambar-->
            <div class="col-lg-4 d-flex align-items-center">
                <img src="/assets/img/login/declogin.png">

            </div>

            <!--Colom Login-->

            <div class="col-lg-4 d-flex align-items-center" id="collogin">

                <form action="/c_Register/auth" method="post" name="myform" onsubmit="" class="px-5 pb-5">
                    <div class="d-flex">
                        <h3 class="font-weight-bold">Log In</h3>
                    </div>
                    <span style='color:red;font-size:15px;'><?= session('msg'); ?></span>
                    <?php if (!empty(session()->getFlashdata('message'))) : ?>
                        <div class="alert alert-info">
                            <?= session()->getFlashdata('message') ?>
                        </div>

                    <?php endif; ?>
                    <input type="text" name="username" id="username" placeholder="Username" required>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <button class="text-white text-weight-bold bt" id="btn_login">Sign In</a></button>
                    <h5 class="ac" id="register"><a class="register" href="<?= base_url('/c_Register/register'); ?>">Register</a></h5>
                </form>
            </div>


        </div>
    </div>


    <!-- Vendor JS Files -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/purecounter/purecounter.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>