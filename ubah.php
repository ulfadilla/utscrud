<?php

require 'function.php';

//ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'ubah.php';
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
    <title>Ubah Data Mahasiswa</title>
</head>

<style>
            legend {
                color: #999999;
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
                float: left;
                color: white;
            }
            input {
            
                border-radius: 15px;
                border-color: #27991748;
                height: 30px;
            }
           
            button{
                background: orange;

            }       
</style>

<body background="aestetic.jpg">

        <div align="center">
            <form action="" method="POST">
        <fieldset>


    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
        <ul>
            <li>
                <label for="nama"> NAMA : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="npm"> NPM : </label>
                <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"] ?>">
            </li>
            <li>
                <label for="jurusan"> JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="email"> EMAIL : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for="gambar"> PHOTO : </label>
                <input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"] ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>

    </form>

</body>

</html>