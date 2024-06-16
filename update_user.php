<?php
include 'koneksi.php';

$id= $_POST['id'];
$nama = $_POST['nama'];
$jabatan= $_POST['jabatan'];
$jabatan2 = $_POST['jabatan2'];
$password = $_POST['password'];
$submit= $_POST['submit'];

if($submit=='edit') {
    $query = mysqli_query($konek, "update user set nama='$nama', jabatan='$jabatan2',
    password='$password' WHERE id='$id'") 
    or die (mysqli_error($konek));
}
if($submit=='new') {
    $query = mysqli_query($konek, "INSERT INTO user
    VALUES ('', '$nama', '$jabatan2', '$password');") 
    or die (mysqli_error($konek));
}


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