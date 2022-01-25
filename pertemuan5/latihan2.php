<?php

$mahasiswa = [
        ["Sella", "E41200", "TIF"],
        ["Putri", "E41300", "MIF"],
        ["Sari", "E3200", "TIP"]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiawa</h1>

    <?php foreach( $mahasiswa as $m ) : ?>
        <ul>
            <li>Nama : <?= $m[0]; ?></li>
            <li>NIM : <?= $m[1]; ?></li>
            <li>Jurusan : <?= $m[2]; ?></li>
        </ul>
    <?php endforeach; ?>
        
</body>
</html>