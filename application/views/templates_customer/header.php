<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rental Mobil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop2') ?>/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop2') ?>/css/animate.css">

  <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop2') ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop2') ?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop2') ?>/css/magnific-popup.css">

  <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop2') ?>/css/aos.css">

  <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop2') ?>/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop2') ?>/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop2') ?>/css/jquery.timepicker.css">


  <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop2') ?>/css/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop2') ?>/css/icomoon.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop2') ?>/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url('customer/dashboard') ?>">Car<span class="text-success"> Rental</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="<?php echo base_url('customer/dashboard') ?>" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="<?php echo base_url('customer/transaksi') ?>" class="nav-link">Transaction</a></li>
          <li class="nav-item"><a href="<?php echo base_url('customer/data_mobil') ?>" class="nav-link">Cars</a></li>
          <li class="nav-item"><a href="<?php echo base_url('register') ?>" class="nav-link">Register</a></li>
          <?php if ($this->session->userdata('nama')) { ?>
            <li class="nav-item">
              <a href="<?php echo base_url('auth/logout') ?>" class="nav-link">Welcome
                <?php echo $this->session->userdata('nama') ?><span> | Logout</span>
              </a>
            </li>
          <?php } else { ?>
            <li class="nav-item"><a href="<?php echo base_url('auth/login') ?>" class="nav-link">Login</a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->