<?php
// Array= sebuah var yg dpt menampung bnyk nilai
// elemen pd array boleh memiliki tipe data yang berbeda

// cara lama :
// $hari = array("Senin", "Selasa", "Rabu");

// // cara baru :
// $bulan = ["januari", "februari", "Maret"]
// $arr1 = [123, "hari", false];


// mencetak array 
// bs mnggunakan var_dumb atau print_r 
// var_dump($hari);
// echo "<br>";
// print_r($bulan);


// menampilkan 1 elemen pada array 
// echo $arr1[0];


// menambahkan elemen baru pd array 
// var_dump($hari);
// $hari[] = "Kamis";
// echo "<br>";
// var_dump($hari);


// Pengulangan pada array 
// for / foreach
$angka = [3,9,4,5,6,7,8];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        .kotak {
             width: 50px;
             height: 50px;
             background-color: salmon;
             text-align: center;
             line-height: 50px;
             margin: 3px
             float: left;
        }

        .clear { clear: both; }
    </style>
</head>
<body>
    <?php for( $i = 0; $i < count($angka); $i++ ) { ?>
     <div class="kotak"><?php $angka[$i]; ?></div>
    <?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>



</body>
</html>