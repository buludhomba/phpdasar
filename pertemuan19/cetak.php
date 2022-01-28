<?php

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit; 
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<br>
<div id="container">
<table border="1" cellpadding="10" cellspacing="0">

    
    <tr>
        <th>No.</th>
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
        <td><img src="img/<?php echo $row["gambar"]; ?> " alt="" widht="50" height="50"></td>
        
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
</div>

    <script>
		window.print();
	</script>

</body>
</html>