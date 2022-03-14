<?php

require 'function.php';


//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'tambah.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<style>
            legend {
                color: #999999;a
                padding: 10px;
                background: #111111;
                border-radius: 10px;
            }
            fieldset {
                max-width: 350px;
                border-radius: 15px;
                border-color: #111111;
                background: #33456835;
            }
            label {
                padding: 10px;
                border-radius: 10px;
                background: #111111;
                float: center;
                color: white;
            }
            input {
            
                border-radius: 15px;
                border-color: #27991748;
                height: 30px;
            }
           
            button{
                background: green;

            }       
</style>

<body background="aestetic.jpg">

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div align="center">
            <form action="" method="POST">
        <fieldset>

    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama"> NAMA : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="npm"> NPM : </label>
                <input type="text" name="npm" id="npm" required>
            </li>
            <li>
                <label for="jurusan"> JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="email"> EMAIL : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="gambar"> PHOTO : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    </form>

</body>

</html>