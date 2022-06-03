<?php
require 'functions.php';

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek tombol
    if (tambah($_POST) > 0) {
        echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    document.location.href = 'index.php';
                </script>    
        ";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data Mahasiswa</title>
</head>

<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nrp">Nama</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nama">NRP</label>
                <input type="text" name="nrp" id="nrp ">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>

    </form>
</body>

</html>