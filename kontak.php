<?php
// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "kontak";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
// cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}