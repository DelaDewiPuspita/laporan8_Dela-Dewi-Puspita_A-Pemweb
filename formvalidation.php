Kembangkan program di atas untuk membuat form pendaftaran siswa baru pada sekolah, yang terdiri
dari 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Peserta Didik Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwE0ngsV7Zt27NXFoaoApmYm81iuXoPkF0JwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>
    <?php
        $error_nama = "";
        $error_email = "";
        $error_web = "";
        $error_pesan = "";
        $error_telp = "";

        $nama = "";
        $email = "";
        $web = "";
        $pesan = "";
        $telp = "";

        if ($_SERVER ["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
                $error_nama = "Nama tidak boleh kosong";
            } else {
                $nama = cek_input($_POST["nama"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
                    $error_nama = "Inputan hanya boleh huruf dan spasi";
                }
            }
            if (empty($_POST["email"])) {
                $error_email = "Email tidak boleh kosong";
            } else {
                $email = cek_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error_email = "Format email invalid";
                }
            }
            if (empty($_POST["web"])) {
                $error_web = "";
            } else {
                $web = cek_input($_POST["web"]);
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)) {
                    $error_web = "Format URL tidak valid";
                }
            }
            if (empty($_POST["pesan"])) {
                $error_pesan = "Pesan tidak boleh kosong";
            } else {
                $pesan = cek_input($_POST["pesan"]);
            }
            if (empty($_POST["telp"])) {
                $error_telp = "No. Telepon tidak boleh kosong";
            } else {
                $telp = cek_input($_POST["telp"]);
                if (!is_numeric($telp)) {
                    $error_telp = "No. Telepon hanya boleh angka";
                }
            }
        }

        function cek_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <div class="container mt-3">
        <h2>Form Pendaftaran Peserta Didik Baru</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Masukkan Nama" name
                </div>
                    <span class="warning"><?php echo $error_email;?></span>
                </div>
                <div class="form-group">
                    <label for="web">Website:</label>
                    <input type="text" class="form-control <?php echo ($error_web !="" ? "is-invalid" : ""); ?>" id="web" placeholder="Masukkan URL" name="web" value="<?php echo $web;?>">
                    <span class="warning"><?php echo $error_web;?></span>
                </div>
                <div class="form-group">
                    <label for="telp">Telp:</label>
                    <input type="text" class="form-control <?php echo ($error_telp !="" ? "is-invalid" : ""); ?>" id="telp" placeholder="Masukkan No. Telp" name="telp" value="<?php echo $telp;?>">
                    <span class="warning"><?php echo $error_telp;?></span>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan:</label>
                    <textarea class="form-control <?php echo ($error_pesan !="" ? "is-invalid" : ""); ?>" id="pesan" placeholder="Masukkan Pesan" name="pesan"><?php echo $pesan;?></textarea>
                    <span class="warning"><?php echo $error_pesan;?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Kirim">
                </div>
            </form>
        </div>
    </div>
</div>