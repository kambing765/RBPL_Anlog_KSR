<?php
include 'koneksi.php';

$id= $_POST['id'];
$no_tugas = $_POST['no_tugas'];
$tugas= $_POST['tugas'];
$user_id0 = $_POST['user_id0'];
$user_id1 = $_POST['user_id1'];
$user_id2 = $_POST['user_id2'];
$user_id3 = $_POST['user_id3'];
$user_id4 = $_POST['user_id4'];
$user_id5 = $_POST['user_id5'];
$jadwal = $_POST['jadwal'];
$status = $_POST['status'];
$jabatan= $_POST['jabatan'];
$submit= $_POST['submit'];

if($submit=='edit') {
    $query = mysqli_query($konek, "update jadwal set user_id1='$user_id1', user_id2='$user_id2', user_id3='$user_id3',
    user_id4='$user_id4', user_id5='$user_id5', no_tugas='$no_tugas',
    tugas='$tugas', user_id0='$user_id0', status='$status', jadwal='$jadwal' WHERE jadwal.id='$id'") 
    or die (mysqli_error($konek));
}
if($submit=='new') {
    $query = mysqli_query($konek, "INSERT INTO jadwal
    VALUES ('', '$user_id0', '$no_tugas', '$tugas', '$jadwal', '$status', 
    '$user_id1', '$user_id2', '$user_id3', '$user_id4', '$user_id5');") 
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