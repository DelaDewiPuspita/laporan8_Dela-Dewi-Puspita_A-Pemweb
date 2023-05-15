<?php
include 'db_fpd';
//menyimpan data kedalam variabel
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$jenis_pedaftaran = $_POST['jenis_pendaftaran'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$nis = $_POST['nis'];
$nomor_peserta = $_POST['nomor_peserta'];
$pernah_paud = $_POST['pernah_paud'];
$pernah_tk = $_POST['pernah_tk'];
$skhun_sebelumnya = $_POST['skhun_sebelumnya'];
$ijazah_sebelumnya = $_POST['ijazah_sebelumnya'];
$hobi = $_POST['hobi'];
$cita_cita = $_POST['cita_cita'];
//query SQL untuk insert data
$query = "INSERT INTO SET id='$id', tanggal='$tanggal', jenis_pedaftaran='$jenis_pendaftaran',  jenis_kelamin='$jenis_kelamin', 
tanggal_masuk='$tanggal_masuk', nis='$nis', nomor_peserta='$nomor_peserta', pernah_paud='$pernah_paud', pernah_tk='$pernah_tk',
skhun_sebelumnya='$skhun_sebelumnya', ijazah_sebelumnya='$ijazah_sebelumnya', hobi='$hobi', cita_cita='$cita_cita'";

mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
// mengalihkan ke halaman index.php
header("location:index.php");
?>