<?php
session_start();
//menghubungkan dengan koneksi
$query=new mysqli('localhost', 'root', '', 'ksr'); //akademik itu nama database

//menangkap data yang dikirim dari form
$username_user = $_POST['username_user'];
$jabatan =$_POST['jabatan'];
$password_user = $_POST['password_user'];

//menyeleksi data admin dengan username dan password sesuai
$data = mysqli_query($query, "select * from user where nama='$username_user' and password='$password_user'") or die(mysqli_error($query));

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
if($cek > 0) {
    $row = mysqli_fetch_assoc($data);
    $jabatan = $row['jabatan'];
    $id_user = $row['id'];
    
    
    if($jabatan == 'komandan') {
    $_SESSION['username_user'] = $username_user;
    $_SESSION['status'] = "login";
    $_SESSION['jabatan'] = "komandan";
    $_SESSION['id_user'] = "$id_user";
    header("location: index.php?pesan=berhasil_login_komandan");
    }
    else if ($jabatan == 'kabid') {
    $_SESSION['username_user'] = $username_user;
    $_SESSION['status'] = "login";
    $_SESSION['jabatan'] = "kabid";
    $_SESSION['id_user'] = "$id_user";
    header("location: index.php?pesan=berhasil_login_kabid");

    }
    else if ($jabatan == 'kasi') {
        $_SESSION['username_user'] = $username_user;
        $_SESSION['status'] = "login";
        $_SESSION['jabatan'] = "kasi";
        $_SESSION['id_user'] = "$id_user";
        header("location: index.php?pesan=berhasil_login_kasi");
    }
    else if ($jabatan == 'anggota') {
    $_SESSION['username_user'] = $username_user;
    $_SESSION['status'] = "login";
    $_SESSION['jabatan'] = "anggota";
    $_SESSION['id_user'] = "$id_user";
    header("location: index.php?pesan=berhasil_login_anggota");
    }
    else {
        header("location:login_user.php?pesan=jabatan");
    }
}else{
    header("location:login_user.php?pesan=gagal"); 
}
?>