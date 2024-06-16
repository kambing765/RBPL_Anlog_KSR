<?php
include 'koneksi.php';

$id= $_POST['id'];
$no_pinjam = $_POST['no_pinjam'];
$nama= $_POST['nama'];
$type = $_POST['type'];
$kuantitas = $_POST['kuantitas'];
$alasan = $_POST['alasan'];
$peminjaman = $_POST['peminjaman'];
$pengembalian = $_POST['pengembalian'];
$peminjam = $_POST['peminjam'];
$status = $_POST['status'];
$jabatan= $_POST['jabatan'];
$submit= $_POST['submit'];

if($submit=='edit') {
    $query = mysqli_query($konek, "update pinjam set no_pinjam='$no_pinjam', nama='$nama',
    type='$type', alasan='$alasan', kuantitas='$kuantitas' ,peminjaman='$peminjaman', pengembalian='$pengembalian', 
    peminjam_id='$peminjam', status='$status' WHERE id='$id'") 
    or die (mysqli_error($konek));
}
if($submit=='new') {
    $query = mysqli_query($konek, "INSERT INTO pinjam
    VALUES ('', '$no_pinjam', '$nama', '$type', '$kuantitas','$alasan', '$peminjaman', '$pengembalian'
    , '$peminjam', '$status');") 
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