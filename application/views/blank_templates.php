 <!-- Page Heading -->
 <div class="main-content">
               <section class="section">
                      <div class="section-header">
                           <h1><?php echo $title ?></h1>
                       </div>
               </section>
        </div>
                   
        <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/assets_shop') ?>/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('assets/assets_shop') ?>/css/styles.css" rel="stylesheet" />
    </head>
    
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Rental Mobil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('register') ?>">Register</a></li>
                        <li class="nav-item row ml-4">
                        <?php if ($this->session->userdata ('nama')) { ?>
                             <a class= "nav-link" href="<?php echo base_url('auth/logout') ?>">
                                Welcome <?php echo $this->session->userdata ('nama') ?> 
                                <span class="btn btn-sm btn-warning">Logout</span></a>
                             <a class= "nav-link" href="<?php echo base_url('auth/ganti_password') ?>">
                              <span class="btn btn-sm btn-primary">Ganti password</span></a>
                        <?php } else { ?>
                              <a class="nav-link" href="<?php echo base_url('auth/login') ?>"><span
                                 class="btn btn-sm btn-success">Login </span> </a>
                                <?php } ?>
                        </li>
                       
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>