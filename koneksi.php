<?php
//Deklarasikan
$hostname = "localhost";
$username = "root";
$password = "";
$database = "ksr";

//membuat koneksi
$konek = mysqli_connect($hostname,$username,$password,$database);

//cek koneksi
if(!$konek) {
    die("koneksi_gagal".mysqli_connect_error());
} else {
    echo "";
}
?>