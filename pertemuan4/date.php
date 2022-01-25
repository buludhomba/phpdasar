<?php
// Funtion 
// l = untuk menampilkan harinya saja
// d = untuk menampilkan tanggal
// m = menampilkan bulan dalam bentuk angka
//  M = menampilkan bulan dalam bntuk tulisan
//  Y = menampilkan tahun

    // echo date("l");
    // echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time = detik yang sudah berlalu sejak 1 january 1970
// echo time ();

// echo date ("d M Y", time()-60*60*24*100) => utk mengecek mundur 100 hari dr skrg
// echo date ("d M Y", time()+60*60*24*100) => utk mengecek maju 100 hari dr sekarang


// mktime => membuat detik sendiri
// mktime(0, 0, 0, 0, 0, 0);
// jam, menit, detik, bulan, tanggal, tahun
// cth mngetahui hari lahir kita
// echo date("l", mktime(0, 0, 0, 18, 12, 2001));



// strtotime => kebalikan dr mktime, berupa format tanggal
// echo date("l", strtotime("18 dec 2001"));

// Utility
/*
- var_dumb
-isset() => mengecek apakah sebuah vr sdh prnh dibikin apa blum dan mghslkn nilan boolean, ktika blm prnh membikin sbuah variabel mka isset ini akan mghslkn false
-empty() => mengecek apakah vr ada kososng ato tdk
-die() => memberhentikan program kita , jk program kita bertemu die ,mk program kita tdk akan dieksekusi
-slepp() => untuk memberhentikan sementara
*/


?>