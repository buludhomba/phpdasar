<?php

// Array Associative 
// definisinya sama seperti array numerik, kecuali key nya adalah string yang kita buat sendiri
$film = [
    [
        "judul" => "Spiderman",
        "rilis" => "2021",
        "gendre" => "triler",
        "durasi" => "2 jam",
        "gambar" => "spider.jpeg"
    ],
    [
        "judul" => "Train to busan",
        "rilis" => "2016",
        "gendre" => "triler",
        "durasi" => "1 jam",   
        "gambar" => "ttb.jpg"
    ],
    [
        "judul" => "mission impossible",
        "rilis" => "2019",
        "gendre" => "triler dan komedi",
        "durasi" => "2 jam",
        "gambar" => "mi.jpg"
    ]
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
</head>
<body>
    <h1>Daftar Film</h1>

    <?php foreach( $film as $f ) : ?>
        <ul>
            <li>
                <img src="img/<?= $f["gambar"];  ?>" >
            </li>
            <li>Judul: <?= $f["judul"]; ?> </li>
            <li>Rilis: <?= $f["rilis"]; ?> </li>
            <li>Gendre: <?= $f["gendre"]; ?> </li>
            <li>Durasi: <?= $f["durasi"]; ?> </li>
        </ul>
    <?php endforeach; ?>



</body>
</html>