<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kontak</title>
</head>
<body>
    <h2>Daftar Kontak</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Pesan</th>
        </tr>
        <?php
        include 'koneksiprak.php'; // Menambahkan script untuk menghubungkan ke database
        $query = "SELECT * FROM kontak";
        $hasil = mysqli_query($koneksi, $query);
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
            $jenis_kelamin = ($data['jkel'] == 'P') ? "Perempuan" : "Laki-laki";
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $data['nama'] . "</td>";
            echo "<td>" . $jenis_kelamin . "</td>";
            echo "<td>" . $data['email'] . "</td>";
            echo "<td>" . $data['alamat'] . "</td>";
            echo "<td>" . $data['kota'] . "</td>";
            echo "<td>" . $data['pesan'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
