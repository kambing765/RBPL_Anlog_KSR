<?php
    include 'koneksi.php';
    
    $id = $_GET['id'];
    $jabatan = $_GET['jabatan'];
    $table = $_GET['table'];

    if ($table == 'dokumentasi') {
        $query= mysqli_query($konek, "Delete from dokumentasi where id = '$id'");}
    if ($table == 'jadwal') {
        $query= mysqli_query($konek, "Delete from jadwal where id = '$id'");}
    if ($table == 'pinjam') {
        $query= mysqli_query($konek, "Delete from pinjam where id = '$id'");}
    if ($table == 'user') {
        $query= mysqli_query($konek, "Delete from user where id = '$id'");}

    if($jabatan == 'komandan') {
        header("location:komandan.php");
        }
        else if ($jabatan == 'kabid') {
        header("location:kabid.php");
    
        }
        else if ($jabatan == 'kasi') {
            header("location:kasi.php");
        
            }
        else if ($jabatan == 'anggota') {
        header("location:anggota.php");
        }
        else {
            header("location:login_user.php?pesan=jabatan");
        }
?>