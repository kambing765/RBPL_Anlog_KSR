<?php
include 'koneksi.php';
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kabid</title>
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
                    if (empty($_SESSION['username_user'])) {
                        header("location: index.php");
                    } else { ?>
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

    <section class="bg-half-260 d-table w-100" style="background: url('images/purna2024_1.jpg');" id="home">
        <div class="bg-overlay bg-gradient-success" style="opacity: 0.8;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <h4 class="heading text-white mb-4">Page Kabid</h4>
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

    <div class="container text-center">


        <h2>Peminjaman</h2>
        <div class="text-start">
            <br><a href="input_pinjam.php?jabatan=kabid"><button class="btn btn-success">New</button></a>
        </div><br>
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
                    <th scope="col">
                    </th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                <?php
                $query = mysqli_query($konek, "SELECT  u0.nama as pinjamnama0, p.id, p.no_pinjam,
                p.nama, p.type, p.kuantitas, p.alasan , p.peminjaman, p.pengembalian, p.status
                FROM    pinjam as p inner JOIN user as u0 ON u0.id = p.peminjam_id order by p.no_pinjam");
                while ($data = mysqli_fetch_array($query)) { ?>
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
                        <td>
                            <a href="edit_pinjam.php?no_pinjam=<?php echo $data['no_pinjam']; ?>&&jabatan=kabid"><button class="btn btn-primary">edit</button></a>
                            <a href="delete.php?id=<?php echo $data['id']; ?>&&jabatan=kabid&&table=pinjam"><button class="btn btn-danger">hapus</button></a>
                        </td>
                    <?php }
                    ?>
                    </tr>
            </tbody>
        </table><br><br>

        <h2>Dokumentasi</h2>
        <div class="text-start">
            <br><a href="input_dokumentasi.php?jabatan=kabid"><button class="btn btn-success">New</button></a>
        </div><br>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr class="table-danger">
                    <th scope="col">
                        Nomor Gambar
                    </th>
                    <th scope="col">
                        Caption
                    </th>
                    <th scope="col">
                        Tanggal
                    </th>
                    <th scope="col">
                        Uploaded by
                    </th>
                    <th scope="col">
                        Gambar
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $query = mysqli_query($konek, "SELECT u0.nama as username0, d.id, d.nomor, d.caption, d.uploaded_by, d.tanggal, d.image
                from dokumentasi as d inner join user as u0 on u0.id = d.uploaded_by order by d.nomor;");
                while ($data = mysqli_fetch_array($query)) { ?>
                    <tr class="table-secondary">
                        <td><?php echo $data['nomor']; ?></td>
                        <td><?php echo $data['caption']; ?></td>
                        <td><?php echo $data['tanggal']; ?></td>
                        <td><?php echo $data['username0']; ?></td>
                        <td><img src="./image/<?php echo $data['image']; ?>" class="rounded mx-auto d-block" style="max-width: 450px; max-height: 300px"></td>

                        <td>
                            <a href="edit_dokumentasi.php?id=<?php echo $data['id']; ?>&&jabatan=kabid"><button class="btn btn-primary">edit</button></a>
                            <a href="delete.php?id=<?php echo $data['id']; ?>&&jabatan=kabid&&table=dokumentasi"><button class="btn btn-danger">hapus</button></a>
                        </td>
                    <?php }
                    ?>
                    </tr>
            </tbody>
        </table><br><br>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>