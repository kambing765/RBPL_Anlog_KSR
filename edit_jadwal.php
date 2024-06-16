<?php
include 'koneksi.php'; ?>

<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Jadwal</title>
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
    <?php
    $jabatan = $_GET['jabatan'];

    ?>
    <!-- awal bootstrap body-->
    <!-- START NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg nav-light fixed-top sticky">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i data-feather="menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <?php
                    session_start();
                    if (empty($_SESSION['username_user'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login_user.php">Login</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link"><?php
                                                echo $_SESSION['username_user'];
                                                ?></a>
                            <p></p>
                        </li>




                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $_SESSION['jabatan'] ?>.php">
                                <?php echo $_SESSION['jabatan']; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    <?php }
                    ?>

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

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <h4 class="heading text-white mb-4">Edit Jadwal</h4> 


                        <div class="row align-items-center">
                            <div class="col-12 mt-4 pt-2">

                                <?php

                                $id = $_GET['id'];
                                $jabatan = $_GET['jabatan'];

                                $query = mysqli_query($konek, "SELECT u0.nama as username0, u1.nama as username1, u2.nama as username2, 
u3.nama as username3, u4.nama as username4, u5.nama as username5, j.user_id0, j.user_id1, j.user_id2, j.user_id3, j.user_id4, j.user_id5,
j.no_tugas, j.tugas, j.jadwal, j.status, j.id 
FROM jadwal as j inner JOIN user as u0 ON u0.id = j.user_id0 inner JOIN user as u1 ON u1.id = j.user_id1 inner JOIN 
user as u2 ON u2.id = j.user_id2 inner JOIN user as u3 ON u3.id = j.user_id3 inner JOIN user as u4 ON u4.id = j.user_id4 
inner JOIN user as u5 ON u5.id = j.user_id5 where j.id='$id';");
                                $data = mysqli_fetch_array($query);
                                ?>
                                <form method="POST" action="update_jadwal.php">
                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                                    <input type="hidden" name="jabatan" value="<?php echo $jabatan ?>" />
                                    Nomor Tugas: <input type="int" name="no_tugas" value="<?php echo $data['no_tugas']; ?>"><br><br>
                                    Tugas: <input type="text" name="tugas" value="<?php echo $data['tugas']; ?>"><br><br>
                                    Pengawas: <select name="user_id0" value="<?php echo $data['username0']; ?>">
                                        <option value="<?php echo $data['user_id0']; ?>">Saat ini <?php echo $data['username0']; ?></option>
                                        <?php $query2 = mysqli_query($konek, "select id as user_id0, nama from user"); while ($data2 = mysqli_fetch_array($query2)) { ?>
                                        <option value="<?php echo $data2['user_id0']; ?>"><?php echo $data2['nama']; ?></option><?php } ?>
                                    </select> <br><br>
                                    Petugas 1: <select name="user_id1" value="<?php echo $data['username1']; ?>">
                                        <option value="<?php echo $data['user_id1']; ?>">Saat ini <?php echo $data['username1']; ?></option>
                                        <?php $query2 = mysqli_query($konek, "select id as user_id1, nama from user"); while ($data2 = mysqli_fetch_array($query2)) { ?>
                                        <option value="<?php echo $data2['user_id1']; ?>"><?php echo $data2['nama']; ?></option><?php } ?>
                                    </select> <br><br>
                                    Petugas 2: <select name="user_id2" value="<?php echo $data['username2']; ?>">
                                        <option value="<?php echo $data['user_id2']; ?>">Saat ini <?php echo $data['username2']; ?></option>
                                        <?php $query2 = mysqli_query($konek, "select id as user_id2, nama from user"); while ($data2 = mysqli_fetch_array($query2)) { ?>
                                        <option value="<?php echo $data2['user_id2']; ?>"><?php echo $data2['nama']; ?></option><?php } ?>
                                    </select> <br><br>
                                    Petugas 3: <select name="user_id3" value="<?php echo $data['username3']; ?>">
                                        <option value="<?php echo $data['user_id3']; ?>">Saat ini <?php echo $data['username3']; ?></option>
                                        <?php $query2 = mysqli_query($konek, "select id as user_id3, nama from user"); while ($data2 = mysqli_fetch_array($query2)) { ?>
                                        <option value="<?php echo $data2['user_id3']; ?>"><?php echo $data2['nama']; ?></option><?php } ?>
                                    </select> <br><br>
                                    Petugas 4: <select name="user_id4" value="<?php echo $data['username4']; ?>">
                                        <option value="<?php echo $data['user_id4']; ?>">Saat ini <?php echo $data['username4']; ?></option>
                                        <?php $query2 = mysqli_query($konek, "select id as user_id4, nama from user"); while ($data2 = mysqli_fetch_array($query2)) { ?>
                                        <option value="<?php echo $data2['user_id4']; ?>"><?php echo $data2['nama']; ?></option><?php } ?>
                                    </select> <br><br>
                                    Petugas 5: <select name="user_id5" value="<?php echo $data['username5']; ?>">
                                        <option value="<?php echo $data['user_id5']; ?>">Saat ini <?php echo $data['username5']; ?></option>
                                        <?php $query2 = mysqli_query($konek, "select id as user_id5, nama from user"); while ($data2 = mysqli_fetch_array($query2)) { ?>
                                        <option value="<?php echo $data2['user_id5']; ?>"><?php echo $data2['nama']; ?></option><?php } ?>
                                    </select> <br><br>
                                    Jadwal: <input type="date" name="jadwal" value="<?php echo $data['jadwal']; ?>"><br><br>
                                    Status: <select name="status" value="<?php echo $data['status']; ?>">
                                        <option value="<?php echo $data['status']; ?>">Saat ini <?php echo $data['status']; ?></option>
                                        <option value="wait">Wait</option>
                                        <option value="progress">Progress</option>
                                        <option value="done">Done</option>
                                    </select>
                                    <input type="submit" name="submit" value="edit">
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
                            <p class="mb-0">© <script>
                                    document.write(new Date().getFullYear())
                                </script> Andrean Nauval</p>
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