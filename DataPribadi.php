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
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<?php
date_default_timezone_set('Asia/Jakarta');
include 'db_dpribadi'
?>
	<form method="post" action="proses-biodata.php">
			<div class="form-group">
				<label for="tanggal">Tanggal:</label>
				<input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo date('d/m/Y'); ?>" disabled>
			</div>
	<div class="container">
		<div class="title">
			Data Pribadi
		</div>
		<form method="post" action="proses.php">
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap:</label>
				<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
			</div>
            <div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki">
        <label class="form-check-label" for="laki_laki">
            Laki-laki
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
        <label class="form-check-label" for="perempuan">
            Perempuan
        </label>
    </div>
</div>
			<div class="form-group">
				<label for="nisn">NISN:</label>
				<input type="text" class="form-control" id="nisn" name="nisn">
			</div>
			<div class="form-group">
				<label for="nik">NIK:</label>
				<input type="text" class="form-control" id="nik" name="nik">
			</div>
			<div class="form-group">
				<label for="tempat_lahir">Tempat Lahir:</label>
				<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
			</div>
            <div class="form-group">
				<label for="tanggal_lahir">Tanggal Lahir:</label>
				<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
			</div>
			<div class="form-group">
				<label for="agama">Agama:</label>
				<select class="form-control" id="agama" name="agama">
					<option value="Islam">Islam</option>
					<option value="Kristen/Protestan">Kristen/Protestan</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Khong Hu Chu">Khong Hu Chu</option>
                    <option value="Lainnya">Lainnya</option>
				</select>
			</div>
			<div class="form-group">
				<label for="berkebutuhan_khusus">Berkebutuhan Khusus:</label>
				<select class="form-control" id="berkebutuhan_khusus" name="berkebutuhan_khusus">
					<option value="Tidak">Tidak</option>
					<option value="Netra">Netra</option>
                    <option value="Rungu">Rungu</option>
                    <option value="Grahita Ringan">Grahita Ringan</option>
                    <option value="Grahita Sedang">Grahita Sedang</option>
                    <option value="Daksa Ringan">Daksa Ringan</option>
                    <option value="Daksa Sedang">Daksa Sedang</option>
					<option value="Laras">Laras</option>
					<option value="Wicara">Wicara</option>
					<option value="Tuna Ganda">Tuna Ganda</option>
					<option value="Hiper Aktif">Hiper Aktif</option>
					<option value="Cerdas Istimewa">Cerdas Istimewa</option>
					<option value="Bakat Istimewa">Bakat Istimewa</option>
					<option value="Kesulitan Belajar">Daksa Sedang</option>
					<option value="Narkoba">Narkoba</option>
					<option value="Indigo">Indigo</option>
					<option value="Down Sindrome">Down Sindrome</option>
					<option value="Autis">Autis</option>
				</select>
			</div>
            <div class="form-group">
				<label for="alamat_jalan">Alamat Jalan:</label>
				<input type="text" class="form-control" id="alamat_jalan" name="alamat_jalan">
			</div>
            <div class="form-group">
				<label for="rt">RT:</label>
				<input type="text" class="form-control" id="rt" name="rt">
			</div>
            <div class="form-group">
				<label for="rw">RW:</label>
				<input type="text" class="form-control" id="rw" name="rw">
			</div>
            <div class="form-group">
				<label for="nama_dusun">Nama Dusun:</label>
				<input type="text" class="form-control" id="nama_dusun" name="nama_dusun">
			</div>
            <div class="form-group">
				<label for="nama_kelurahan/desa">Nama Kelurahan/Desa:</label>
				<input type="text" class="form-control" id="nama_kelurahan/desa" name="nama_kelurahan/desa">
			</div>
            <div class="form-group">
				<label for="kecamatan">Kecamatan:</label>
				<input type="text" class="form-control" id="kecamatan" name="kecamatan">
			</div>
            <div class="form-group">
				<label for="kode_pos">Kode Pos:</label>
				<input type="text" class="form-control" id="kode_pos" name="kode_pos">
			</div>
			<div class="form-group">
				<label for="tempat_tinggal">Tempat Tinggal:</label>
				<select class="form-control" id="tempat_tinggal" name="tempat_tinggal">
					<option value="Bersama Orang Tua">Bersama Orang Tua</option>
					<option value="Wali">Wali</option>
					<option value="Kos">Kos</option>
					<option value="Asrama">Asrama</option>
					<option value="Panti Asuhan">Panti Asuhan</option>
					<option value="Lainnya">Lainnya</option>
				</select>
			</div>
			<div class="form-group">
				<label for="moda_transportasi">Moda Transportasi:</label>
				<select class="form-control" id="moda_transportasi" name="moda_transportasi">
					<option value="Jalan Kaki">Jalan Kaki</option>
					<option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
					<option value="Kendaraan Umum/angkot/Pete-pete">Kendaraan Umum/angkot/Pete-pete</option>
					<option value="Jemputan Sekolah">Jemputan Sekolah</option>
					<option value="Kereta Api">Kereta Api</option>
					<option value="Ojek">Ojek</option>
					<option value="Andong/Bendi/Sado/Dokar/Delman/Beca">Andong/Bendi/Sado/Dokar/Delman/Beca</option>
					<option value="Perahu penyebrangan/Rakit/Gelek">Perahu penyebrangan/Rakit/Gelek</option>
					<option value="Lainnya">Lainnya</option>
				</select>
			</div>
			<div class="form-group">
				<label for="no_hp">Nomor HP:</label>
				<input type="text" class="form-control" id="no_hp" name="no_hp">
			</div>
			<div class="form-group">
				<label for="no_telepon">Nomor Telepon:</label>
				<input type="text" class="form-control" id="no_telepon" name="no_telepon">
			</div>
			<div class="form-group">
				<label for="email_pribadi">E-mail Pribadi:</label>
				<input type="text" class="form-control" id="email_pribadi" name="email_pribadi">
			</div>
			<div class="form-group">
				<label for="kps">Penerima KPS/PKS/KIP:</label>
				<select class="form-control" id="kps" name="kps">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
			<div class="form-group">
				<label for="no_kps">No.KPS/KKS/PKH/KIP:</label>
				<input type="text" class="form-control" id="no_kps" name="no_kps">
			</div>
			<div class="form-group">
				<label for="kewarganegaraan">Kewarganegaraan:</label>
				<select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
					<option value="Indonesia (WNI)">Indonesia (WNI)</option>
					<option value="Asing (WNA)">Asing (WNA)</option>
				</select>
			</div>
			<div class="form-group">
 			 <label for="nama_negara">Nama Negara:</label>
 			 <input type="text" class="form-control" id="nama_negara" name="nama_negara">
			</div>
			<div class="text">
			Sebelum klik tombol "Next", pastikan Anda menyimpan data terlebih dahulu.
		</div>

			<button type="button" onclick="submitForm()">Kirim</button>

	<script>
		function submitForm() {
			// proses pengiriman data formulir ke server dapat ditambahkan di sini
			alert("Terima kasih telah mengisi formulir peserta didik, semoga beruntung!");
		}
	</script>
</script>
</div>
</form>