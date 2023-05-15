<?php
include 'db_dpribadi';
//menyimpan data kedalam variabel
$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];
$alamat_jalan = $_POST['alamat_jalan'];
$ijazah_sebelumnya = $_POST['ijazah_sebelumnya'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$nama_dusun = $_POST['nama_dusun'];
$kelurahan_desa = $_POST['kelurahan_desa'];
$kecamatan = $_POST['kecamatan'];
$kode_pos = $_POST['kode_pos'];
$tempat_tinggal = $_POST['tempat_tinggal'];
$mode_transportasi = $_POST['mode_transportasi'];
$no_hp = $_POST['no_hp'];
$no_telepon = $_POST['no_telepon'];
$email = $_POST['email'];
$penerima_kps = $_POST['penerima_kps'];
$no_kps = $_POST['no_kps'];
$penerima_kip = $_POST['penerima_kip'];
$no_kip = $_POST['no_kip'];
$nama_kip = $_POST['nama_kip'];
$terima_fisik_buku = $_POST['terima_fisik_buku'];
$lainnya = $_POST['lainnya'];
//query SQL untuk insert data
$query = "INSERT INTO db_dpribadi SET id='$id', nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_kelamin',  nisn='nisn', 
nik='$nik', tempat_lahir='$tempat_lahir', agama='$agama', berkebutuhan_khusus='$berkebutuhan_khusus', alamat_jalan='$alamat_jalan',
rt='$rt', rw='$rw', nama_dusun='$nama_dusun', kelurahan_desa='$kelurahan_desa', kecamatan='kecamatan', kode_pos='$kode_pos', tempat_tinggal='$tempat_tinggal',
mode_transportasi='$mode_transportasi', no_hp='$no_hp', no_telepon='$no_telepon', email='$email', penerima_kps='$penerima_kps', no_kps='$no_kps', penerima_kip='$penerima_kip',
no_kip='$no_kip', nama_kip='$nama_kip', terima_fisik_buku='$terima_fisik_buku', lainnya='$lainnya',";

mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
// mengalihkan ke halaman index.php
header("location:index.php");
?>