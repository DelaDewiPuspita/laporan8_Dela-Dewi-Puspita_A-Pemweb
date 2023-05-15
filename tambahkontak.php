<?php
include 'koneksiprak.php';
$nama   = $_POST['nama'];
$jkel   = $_POST['jkel'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];
$kota   = $_POST['kota'];
$p      = $_POST['pesan'];
mysqli_query($koneksi, "INSERT INTO kontak VALUES('','$nama','$jkel','$email','$alamat','$kota','$p')") or die(mysqli_error($koneksi));
header("location:index.php?pesan=input");
?> 