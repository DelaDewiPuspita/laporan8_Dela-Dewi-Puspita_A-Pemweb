<?php
include 'db_fpd.php';
// tangkap data yang dikirimkan melalui form
$tanggal = $_POST['tanggal'];
$jenis_pendaftaran = $_POST['jenis_pendaftaran'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$nis = $_POST['nis'];
$nomor_peserta = $_POST['nomor_peserta'];
$pernah_paud = $_POST['pernah_paud'];
$pernah_tk = $_POST['pernah_tk'];
$skhun_sebelumnya = $_POST['skhun_sebelumnya'];
$ijazah_sebelumnya = $_POST['ijazah_sebelumnya'];
$hobi = $_POST['hobi'];
$cita_cita = $_POST['cita-cita'];
// buat query untuk memasukkan data ke dalam tabel "biodata"
$query = "INSERT INTO biodata (tanggal, jenis_pendaftaran, tanggal_masuk, nis, nomor_peserta, pernah_paud, pernah_tk, skhun_sebelumnya, ijazah_sebelumnya, hobi, cita_cita) VALUES 
('$tanggal', '$jenis_pendaftaran', '$tanggal_masuk', '$nis', '$nomor_peserta', '$pernah_paud', '$pernah_tk', '$skhun_sebelumnya', '$ijazah_sebelumnya', '$hobi', '$cita_cita')";
// jalankan query
$result = mysqli_query($koneksi, $query);
// cek apakah query berhasil dijalankan atau tidak
if ($result) {
    echo "Data berhasil disimpan";
} else {
    echo "Data gagal disimpan";
}
// tutup koneksi ke database
mysqli_close($koneksi);
?>