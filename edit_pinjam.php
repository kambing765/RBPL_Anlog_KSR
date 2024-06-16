<?php
include 'koneksi.php'; ?>

<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Peminjaman</title>
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
                        <h4 class="heading text-white mb-4">Edit Peminjaman</h4>


                        <div class="row align-items-center">
                            <div class="col-12 mt-4 pt-2">

                                <?php $no_pinjam = $_GET['no_pinjam'];
                                $jabatan = $_GET['jabatan'];
                                ?>
                                <br>
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr class="table-danger">
                                            <th scope="col">
                                                No
                                            </th>
                                            <th scope="col">
                                                Nama
                                            </th>
                                            <th scope="col">
                                                Type
                                            </th>
                                            <th scope="col">
                                                Kuantitas
                                            </th>
                                            <th scope="col">
                                                Alasan
                                            </th>
                                            <th scope="col">
                                                Peminjaman
                                            </th>
                                            <th scope="col">
                                                Pengembalian
                                            </th>
                                            <th scope="col">
                                                Peminjam
                                            </th>
                                            <th scope="col">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">

                                        <?php
                                        $query = mysqli_query($konek, "SELECT  u0.nama as pinjamnama0, p.id, p.no_pinjam,
                                        p.nama, p.type, p.kuantitas, p.alasan , p.peminjaman, p.pengembalian, p.status
                                        FROM    pinjam as p inner JOIN user as u0 ON u0.id = p.peminjam_id where no_pinjam = '$no_pinjam';");
                                        $data = mysqli_fetch_array($query); { ?>
                                            <tr class="table-secondary">
                                                <td><?php echo $data['no_pinjam']; ?></td>
                                                <td><?php echo $data['nama']; ?></td>
                                                <td><?php echo $data['type']; ?></td>
                                                <td><?php echo $data['kuantitas']; ?></td>
                                                <td><?php echo $data['alasan']; ?></td>
                                                <td><?php echo $data['peminjaman']; ?></td>
                                                <td><?php echo $data['pengembalian']; ?></td>
                                                <td><?php echo $data['pinjamnama0']; ?></td>
                                                <td><?php echo $data['status']; ?></td>
                                            <?php }
                                            ?>
                                            </tr>
                                    </tbody>
                                </table><br><br>
                                <?php



                                $query = mysqli_query($konek, "SELECT  u0.nama as pinjamnama0, p.id, p.no_pinjam,
                                p.nama, p.type, p.kuantitas, p.alasan , p.peminjaman, p.pengembalian, p.status, p.peminjam_id
                                FROM    pinjam as p inner JOIN user as u0 ON u0.id = p.peminjam_id where no_pinjam = '$no_pinjam';");
                                $data = mysqli_fetch_array($query);
                                ?> <?php if ($jabatan == 'anggota') { ?>
                                    <form method="POST" action="update_pinjam.php">
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                                        <input type="hidden" name="nama" value="<?php echo $data['nama']; ?>" />
                                        <input type="hidden" name="no_pinjam" value="<?php echo $data['no_pinjam']; ?>" />
                                        <input type="hidden" name="type" value="<?php echo $data['type']; ?>" />
                                        <input type="hidden" name="kuantitas" value="<?php echo $data['kuantitas']; ?>" />
                                        Alasan: <input type="text" name="alasan" value="<?php echo $data['alasan']; ?>"><br><br>
                                        Peminjam: <select name="peminjam" value="<?php echo $data['pinjamnama0']; ?>">
                                            <option value="<?php echo $data['peminjam_id']; ?>">Saat ini <?php echo $data['pinjamnama0']; ?></option>
                                            <?php $query2 = mysqli_query($konek, "select id as peminjam_id, nama from user");
                                            while ($data2 = mysqli_fetch_array($query2)) { ?>
                                                <option value="<?php echo $data2['peminjam_id']; ?>"><?php echo $data2['nama']; ?></option><?php } ?>
                                        </select> <br><br>
                                        <input type="hidden" name="jabatan" value="<?php echo $jabatan ?>" />
                                        Status: <select name="status" value="<?php echo $data['status']; ?>">
                                            <option value="<?php echo $data['status']; ?>">Saat ini <?php echo $data['status']; ?></option>
                                            <option value="Pending">Pending</option>
                                        </select>
                                        <input type="submit" name="submit" value="edit">
                                    </form>


                                <?php } else { ?>


                                    <form method="POST" action="update_pinjam.php">
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                                        <input type="hidden" name="jabatan" value="<?php echo $jabatan ?>" />
                                        Nomor Pinjam: <input type="int" name="no_pinjam" value="<?php echo $data['no_pinjam']; ?>"><br><br>
                                        Nama: <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br><br>
                                        Type: <select name="type" value="<?php echo $data['type']; ?>">
                                            <option value="<?php echo $data['type']; ?>">Saat ini <?php echo $data['type']; ?></option>
                                            <option value="Obat">Obat</option>
                                            <option value="Alat">Alat</option>
                                            <option value="Pakaian">Pakaian</option>
                                        </select><br><br>
                                        Kuantitas: <input type="int" name="kuantitas" value="<?php echo $data['kuantitas']; ?>"><br><br>
                                        Alasan: <input type="text" name="alasan" value="<?php echo $data['alasan']; ?>"><br><br>
                                        Peminjaman: <input type="date" name="peminjaman" value="<?php echo $data['peminjaman']; ?>"><br><br>
                                        Pengembalian: <input type="date" name="pengembalian" value="<?php echo $data['pengembalian']; ?>"><br><br>
                                        Peminjam: <select name="peminjam" value="<?php echo $data['pinjamnama0']; ?>">
                                            <option value="<?php echo $data['peminjam_id']; ?>">Saat ini <?php echo $data['pinjamnama0']; ?></option>
                                            <?php $query2 = mysqli_query($konek, "select id as peminjam_id, nama from user");
                                            while ($data2 = mysqli_fetch_array($query2)) { ?>
                                                <option value="<?php echo $data2['peminjam_id']; ?>"><?php echo $data2['nama']; ?></option><?php } ?>
                                        </select> <br><br>
                                        Status: <select name="status" value="<?php echo $data['status']; ?>">
                                            <option value="<?php echo $data['status']; ?>">Saat ini <?php echo $data['status']; ?></option>
                                            <option value="Available">Available</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Unavailable">Unavailable</option>
                                        </select>
                                        <input type="submit" name="submit" value="edit">
                                    </form>
                                <?php } ?>
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