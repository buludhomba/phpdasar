<?php
// cek apakah tidak ada data di $_GET dengan isset
if( !isset($_GET["judul"]) ||
    !isset($_GET["rilis"]) ||
    !isset($_GET["gendre"]) ||
    !isset($_GET["durasi"]) ||
    !isset($_GET["gambar"]) ) {

        // redirect/kembali ke halaman latihan1 jika ada yang coba2 memaksa masuk kedalam sistem melaui pengubahan url
        header("Location: latihan1.php");
        exit;
    }



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    
<ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
    <li><?= $_GET["judul"]; ?></li>
    <li><?= $_GET["rilis"]; ?></li>
    <li><?= $_GET["gendre"]; ?></li>
    <li><?= $_GET["durasi"]; ?></li>

</ul> 

<a href="latihan1.php">Kembali ke daftar film</a>
</body>
</html>