<?php 
// Pertemuan 2
// Sintax PHP

// Standar Output (mnctk sesuatu ke layar) :
// echo , print 
// print_r khusus mncetak isi array
// var_dumb melihat isi variabel

// echo "Sella Putri Sari";
// echo 'Putri';
// print "Sella";
// print_r ("Sella");
// var_dump ("Sella P");
// echo 123;

//Penulisan Sintax PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP (tdk disarankan)

// Variabel dan Tipe Data
// Variabel
// $ => menampung sebuah nilai , $nama = "Sella";

// Operator 
// Aritmatika
// + - * / %
// $x = 5;
// $y = 2;
// echo $x * $y;

// penggabung string 
// . 
// $nama_depan = Sella;
// $nama_bel = Putri;
// echo $nama_depan . $nama_bel; => tampil SellaPutri
// echo $nama_depan . " " . $nama_bel; => tampil Sella Putri

// Assignment 
// =, +=, -=. *=, /=, %=, .=
// $x = 2;
// $x = 4;
// echo $x; => tampil 4
/*
 $x = 2;
$x += 4;
echo $x; => tampil 6
*/


// Perbandingan
// <, >, <=, >=, ==, != (untuk mengecek perkondisian)
/* cth :
var_dumb(1 < 5); => akan tampil bool(true)

var_dumb(1 == "1"); => akan tampil bool(true) berarti tdk mngecek tipe data
*/

// identitas 
// ===, !==, 
/* cth:
var_dumb(1 === "1"); => tampil bool(false) meski nilainy sm tpi tipe datany beda
*/

// Logika
// &&, ||, !
/* cth:
$x = 10;
var_dumb($x < 20 && $x % 2 == 0); => jadi maksutnya jika x adalah 10 trus dibagi dengan 2 apakah sisa 0, akan tampil bool(true) karena menggunakan operator &&(operator dan 22 nya harus bernilai benar)

Sedangkan || jika salah satu statement betul maka nilainy tetap true

*/

?>

<!-- contoh 1 Penulisan Sintax php-->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1> Halo, Welcome <? // php echo "Sella"; ?> </h1>
</body>
</html> -->

<!-- contoh 2 Penulisan sintax php-->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php 
       // echo "<h1>Halo, Welcome Sella </h1>";
    ?>

</body>
</html> -->