<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wisata Merapi</title>
  <meta name="description" content="Responsive HTML5 Template" />
  <meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean" />
  <meta name="author" content="Shreethemes" />
  <meta name="website" content="https://shreethemes.in" />
  <meta name="email" content="support@shreethemes.in" />
  <meta name="version" content="1.0.0" />
  <!-- favicon -->
  <link href="images/favicon.ico" rel="shortcut icon">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
  <link href="css/tobii.min.css" type="text/css" rel="stylesheet" />
  <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
  <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">
  <!-- Custom  Css -->
  <link href="css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
</head>

<body>
    <!-- START NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg nav-light fixed-top sticky">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i data-feather="menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-navlist">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Layanan</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lainnya</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php">Harga</a></li>
                        <li><a class="dropdown-item" href="index.php">Tentang</a></li>
                        <li><a class="dropdown-item" href="index.php">Galeri</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="booking.php">Booking</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Kritik & Saran</a>
                </li>

                <?php
                session_start();
                if (empty($_SESSION['username'])){?>
                <?php }
                else{ 
                    if ($_SESSION['tipe'] == "admin"){
                        ?>  
                        <div class="px-3">
                            <a href="admin.php"><button class="btn btn-outline-danger">Admin</button></a>
                            <a href="profil.php"><button class="btn btn-outline-dark"><?php echo $_SESSION['username'];?></button></a>
                        </div>
                        <a href="logout.php"><button class="btn btn-outline-warning">Logout</button></a>
                        <?php
                    }
                    else{
                        ?>
                        <div class="px-3">
                            <a href="profil.php"><button class="btn btn-outline-dark">
                                <?php
                                echo $_SESSION['username'];
                                ?></button></a></div>
                                <a href="logout.php"><button class="btn btn-outline-warning">Logout</button></a>
                                <?php 
                            }}
                            ?>


                        </ul>
                    </div>
                    <!--end collapse-->
                </div>
                <!--end container-->
            </nav>
            <!-- END NAVBAR -->

            <!-- Start Hero -->
            <section class="bg-half-260 d-table w-100" style="background: url('images/bgmerapi.png');" id="home">
                <div class="bg-overlay bg-gradient-primary" style="opacity: 0.8;"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="title-heading text-center">
                                <h4 class="heading text-white mb-4">LOGIN</h4>


                                <?php

                                if (empty($_SESSION['username'])){
                                    header("location: login.php?pesan=belum_login");
                                }
                                else{ ?><div class="text-light"><?php
                                    echo "Username : "; echo $_SESSION['username']; ?><br>
                                    </div>
                                    
                                    <div class="row justify-content-center">
                                        <div>
                                            <a href="riwayatpesan.php"><button class="btn btn-primary">RIWAYAT PESAN</button></a>
                                        </div>
                                    </div>


                                    <?php


                                }
                                ?>

                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </section><!--end section-->

            <div class="position-relative">
                <div class="shape overflow-hidden text-white">
                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                    </svg>
                </div>
            </div>
            <!-- End Hero -->

            <!-- JAVASCRIPTS -->
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/gumshoe.js"></script>
            <script src="js/tobii.min.js"></script>
            <script src="js/contact.js"></script>
            <script src="js/feather.min.js"></script>
            <!-- Custom -->
            <script src="js/plugins.init.js"></script>
            <script src="js/app.js"></script>
        </body>
        </html>