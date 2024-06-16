<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KSR | Login</title>
        <meta name="description" content="Responsive HTML5 Template" />
        <meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean" />
        <meta name="author" content="Shreethemes" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="version" content="1.0.0" />
        <!-- favicon -->
        <link href="image/Logo_KSR_UPNYK.png" rel="shortcut icon">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="css/tobii.min.css" type="text/css" rel="stylesheet" />
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">
        <!-- Custom  Css -->
        <link href="css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
    </head>


    
    <body>
<!-- awal bootstrap body-->
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
                    <a class="nav-link" href="login_user.php">Login</a>
                </li>
            </ul>
        </div>
        <!--end collapse-->
    </div>
    <!--end container-->
</nav>
<!-- END NAVBAR -->


<!-- Start Hero -->
<section class="bg-half-260 d-table w-100" style="background: url('images/purna2024_1.jpg');" id="home">
    <div class="bg-overlay bg-gradient-success" style="opacity: 0.8;"></div>
        <div>
            <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan']=="gagal"){
                        echo "Login gagal! Username, Password atau Jabatan salah!";
                    }
                }
            ?>
        </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h4 class="heading text-white mb-4">LOGIN</h4>

                    
                    <div class="row align-items-center">
                        <div class="col-12 mt-4 pt-2">
                        <form method="POST" action="cek_login_user.php" class="form-group row">
                            <p style="color:white;">Username</p>
                            <input type="text" name="username_user" placeholder="Masukkan Username"><br><br>
                            <p style="color:white;">Password</p>
                            <input type="password" name="password_user" placeholder="Masukkan Password"><br><br>
                            
                            <input type="submit" value="LOGIN">
                        </form>
                            <a href="index.php"><button> back to homepage </button></a>
                        </div>
                    </div>
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
<br><br><br><br>
<!-- End Hero -->
<!-- Start Footer -->
<footer class="bg-footer footer-bar">
            <div class="footer-py-30">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-sm-3">
                        </div>

                        <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="text-center">
                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Andrean Nauval</p>
                            </div>
                        </div>
    
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- End Footer -->
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

<!-- akhir bootstrap body-->

    </body>
</html>


