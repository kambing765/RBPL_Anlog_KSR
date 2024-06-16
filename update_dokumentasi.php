<?php
include 'koneksi.php';


$id_user = $_POST['uploaded_by'];
$nomor = $_POST['nomor'];
$caption= $_POST['caption'];
$tanggal = $_POST['tanggal'];
$jabatan= $_POST['jabatan'];
$submit= $_POST['submit'];

$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$folder = "./image/" . $filename;
move_uploaded_file($tempname, $folder);

if($submit=='edit') {
    $id= $_POST['id'];
    $two = $_POST['two'];
        if($two==  'no') {
        $query = mysqli_query($konek, "UPDATE `dokumentasi` SET `nomor` = '$nomor', `caption` = '$caption', `tanggal` = '$tanggal'
        WHERE id='$id'") or die (mysqli_error($konek));
        }
        else {
        $query = mysqli_query($konek, "UPDATE `dokumentasi` SET `nomor` = '$nomor', `caption` = '$caption', 
        `uploaded_by`='$id_user', `tanggal` = '$tanggal', `image` = '$filename'
        WHERE id='$id'") or die (mysqli_error($konek));
        }
    
}
if($submit=='new') {
    $query = mysqli_query($konek, "INSERT INTO dokumentasi (`id`, `nomor`, `caption`, `uploaded_by` ,`tanggal`, `image`)
    VALUES ('', '$nomor', '$caption', '$id_user' ,'$tanggal', '$filename');") 
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