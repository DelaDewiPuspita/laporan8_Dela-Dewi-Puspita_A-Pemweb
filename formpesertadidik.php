<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran Peserta Didik Baru</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.title {
			background-color: black;
			color: white;
			font-weight: bold;
			padding: 10px;
			marg
			in-bottom: 20px;
		}
	</style>
</head>
<body>
<?php
date_default_timezone_set('Asia/Jakarta');
include 'db_fpd.php';
?>

	<div class="container">
		<div class="title">
			Registrasi Peserta Didik
		</div>
		<form method="post" action="proses-biodata.php">
			<div class="form-group">
				<label for="tanggal">Tanggal:</label>
				<input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo date('d/m/Y'); ?>" disabled>
			</div>
			<div class="form-group">
				<label for="jenis_pendaftaran">Jenis Pendaftaran:</label>
				<input type="text" class="form-control" id="jenis_pendaftaran" name="jenis_pendaftaran">
			</div>
			<div class="form-group">
				<label for="tanggal_masuk">Tanggal Masuk Sekolah:</label>
				<input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk">
			</div>
			<div class="form-group">
				<label for="nis">NIS:</label>
				<input type="nis" class="form-control" id="nis" name="nis">
			</div>
			<div class="form-group">
				<label for="nomor_peserta">Nomor Peserta Ujian:</label>
				<input type="nomor_peserta" class="form-control" id="nomor_peserta" name="nomor_peserta">
			</div>
			<div class="form-group">
				<label for="pernah_paud">Apakah Pernah PAUD:</label>
				<select class="form-control" id="pernah_paud" name="pernah_paud">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
			<div class="form-group">
				<label for="pernah_tk">Apakah Pernah TK:</label>
				<select class="form-control" id="pernah_tk" name="pernah_tk">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
			<div class="form-group">
				<label for="skhun_sebelumnya">No. Seri SKHUN Sebelumnya:</label>
				<input type="skhun_sebelumnya" class="form-control" id="skhun_sebelumnya" name="skhun_sebelumnya">
			</div>
			<div class="form-group">
				<label for="ijazah_sebelumnya">No. Seri Ijazah Sebelumnya:</label>
				<input type="ijazah_sebelumnya" class="form-control" id="ijazah_sebelumnya" name="ijazah_sebelumnya">
			</div>
			<div class="form-group">
				<label for="hobi">Hobi:</label>
				<select class="form-control" id="hobi" name="hobi">
					<option value="Olah Raga">Olah Raga</option>
					<option value="Kesenian">Kesenian</option>
					<option value="Membaca">Membaca</option>
					<option value="Menulis">Menulis</option>
					<option value="Travelling">Travelling</option>
					<option value="Lainnya">Lainnya</option>
				</select>
			</div>
			<div class="form-group">
				<label for="cita-cita">Cita-Cita:</label>
				<select class="form-control" id="cita-cita" name="cita-cita">
					<option value="PNS">PNS</option>
					<option value="TNI/POLRI">TNI/POLRI</option>
					<option value="Guru/Dosen">Guru/Dosen</option>
					<option value="Dokter">Dokter</option>
					<option value="Politikus">Politikus</option>
					<option value="Wiraswasta">Wiraswasta</option>
					<option value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis</option>
					<option value="Lainnya">Lainnya</option>
				</select>
				<div class="text">
			Sebelum klik tombol "Next", pastikan Anda menyimpan data terlebih dahulu.
		</div>
			</div>
			<button type="button" onclick="submitForm()">Kirim</button>
	</form>
	</div>
	</div>
	<script>
		function submitForm() {
			// proses pengiriman data formulir ke server dapat ditambahkan di sini
			alert("Terima kasih telah mengisi formulir peserta didik, semoga beruntung!");
		}
	</script>
</script>
</div>
</form>