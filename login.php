<?php
session_start(); // memulai sesi

if(isset($_POST['login'])) { // jika tombol login ditekan
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];

    // melakukan validasi username dan password
    if($nama == 'admin' && $password == 'password' && $email == 'admin@example.com' && $usia == 25 && $alamat == 'Jakarta') { // jika data benar
        $_SESSION['nama'] = $nama; // menyimpan nama pengguna ke dalam sesi
        header('Location: formpesertadidik.php'); // mengarahkan ke halaman formpesertadidik.php
        exit();
    } else {
        $error = "Nama, password, email, usia, atau alamat salah."; // menampilkan pesan error jika data tidak ditemukan
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-color: #f7d2d2;
        }
        form {
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
            width: 400px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="number"] {
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
        }
        textarea {
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            height: 100px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #ff7f7f;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #ff4c4c;
        }
        .error {
            color: #ff0000;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php if(isset($error)): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="POST" action="formpesertadidik.php">
        <label>Nama:</label>
        <input type="text" name="nama"><br>

        <label>Password:</label>
        <input type="password" name="password"><br>

        <label>Email:</label>
        <input type="email" name="email"><br>

        <label>Usia:</label>
        <input type="number" name="usia"><br>

        <label>Alamat:</label>
        <textarea name="alamat"></textarea><br>

        <button type="submit" name="login">Login</button>
    </form>
</body
