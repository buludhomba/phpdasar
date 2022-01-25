<?php

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit; 
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ");


// tombol cari diklik kita akan menimpa nya data mhssw
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>


<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian...." autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari</button>
  
</form>

<br>
<table border="1" cellpadding="10" cellspacing="0">

    
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i =1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>
    <tr>
        <td><?= $i ?></td>
        <td>
            <a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> |
            <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a> 
        </td>
        <td><img src="img/<?php echo $row["gambar"]; ?> " alt="" widht="50" height="50"></td>
        
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>


<script src="js/script.js"></script>
</body>
</html>