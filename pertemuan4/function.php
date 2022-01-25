<!-- kita harus mendefinikan funsi  -->

<?php
 function salam($nama) {
     return "Selamat Datang $nama";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <h1><?php echo salam("Sella"); ?></h1>
    <!-- php echo dibaris 19 dapat diganti dengan "=" -->
</body>
</html>



<!--cth 2 kita harus mendefinikan fungsi dan parameter  -->
<?php
 function salam($waktu, $nama) {
     return "Selamat Datang $nama";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <h1><?= salam( "Pagi", "Sella"); ?></h1>
    <!-- "=" dibaris 19 dapat diganti dengan "php echo" -->
</body>
</html>


<!--cth 3  mendefinikan fungsi dan parameter namun tetap mengisikan parameter fungsi lagi mk hasilnya akn dibaca yg diisikan lagi itu  -->
<?php
 function salam($waktu = "Siang", $nama = "Admin") {
     return "Selamat $waktu, $nama";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <h1><?= salam( "Pagi", "Sella"); ?></h1>
    <!-- "=" dibaris 19 dapat diganti dengan "php echo" -->
</body>
</html>


<!--cth 4  mendefinikan fungsi dan parameter   -->
<?php
 function salam($waktu = "Siang", $nama = "Admin") {
     return "Selamat $waktu, $nama";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <h1><?= salam(); ?></h1>
    <!-- "=" dibaris 19 dapat diganti dengan "php echo" -->
</body>
</html>