<?php
/* Variabel Scope / Lingkup variabel
// $x = 10;


// function tampilX() {
//     global $x; 
// // global berarti dapat mengambil variabel yang ada diluar fungsi ataupun di dalam funsi
//     echo$x;
// }

// tampilX();
*/
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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>   
    <?php foreach( $film as $f ) : ?>
        <li>
            <a href="latihan2.php?judul=<?= $f["judul"]; ?>&rilis=<?= $f["rilis"]; ?>&gendre=<?= $f["gendre"]; ?>&durasi= <?= $f["durasi"]; ?>&gambar=<?= $f["gambar"]; ?>"><?= $f["judul"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul> 

</body>
</html>