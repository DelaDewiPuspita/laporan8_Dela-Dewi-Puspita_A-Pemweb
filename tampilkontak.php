<h2>List Kontak</h2>
<table border="1">
    <tr><th>NO</th><th>NAMA</th><th>GENDER</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
    <?php
    include 'koneksiprak.php';
    $kontak = mysqli_query($koneksi, "SELECT * from kontak");
    $no=1;
    while ($row = mysqli_fetch_assoc($kontak)){
        $jenis_kelamin = $row['jkel']=='P'?'Perempuan':'Laki-laki';
        echo "<tr>"
            ."<td>".$no."</td>"
            ."<td>".$row['nama']."</td>"
            ."<td>".$jenis_kelamin."</td>"
            ."<td>".$row['email']."</td>"
            ."<td>".$row['alamat']."</td>"
            ."<td>".$row['kota']."</td>"
            ."<td>".$row['pesan']."</td>"
            ."</tr>";
            $no++;
    }
    ?>
</table>