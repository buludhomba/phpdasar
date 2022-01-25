<?php
// Pengulangan
/*
-for
-while (selama kondisi bernilai true lakukan apapun didalamnya)
-do.. while (lakukan hal ini selama kondisi bernilai true, namun ketika kondisi brnilai false maka blok akan djlnkn satu kali)
-foreach
*/

/* cth for 
for ( $i = 0; $i < 5; $i++ ) {
    echo "Hello! <br>";
} => maka akan tampil 
Hello!
Hello!
Hello!
Hello!
Hello!
*/

/* cth while 
$i = 0;
while ( $i < 5; ) {
    echo "Hello! <br>";
$i++;
} => maka akan tampil 
Hello!
Hello!
Hello!
Hello!
Hello!
*/

/* cth do.. while 
$i = 0;
do {
    echo "Hello! <br>";
$i++;
} while ( $i < 5; );
=> maka akan tampil 
Hello!
Hello!
Hello!
Hello!
Hello!

sdgkn
$i = 10;
do {
    echo "Hello! <br>";
$i++;
} while ( $i < 5; );
=> maka akan tampil 
Hello! 
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
            <td>2,4</td>
            <td>2,5</td>
        </tr> seperti ini sangat tdk efektif untuk membuat tabel --> 
       
        <?php
    //    for( $i = 1; $i <= 2; $i++) {
        //        echo "<tr>";
             //     for( $j = 1; $j <= 5; $j++) {
         //           echo "<td>$i,$j</td>";
            //       }
         //       echo "</tr>";
     //    } => hal seperti ini jg bsa dilakukan namun kurang efektif
        ?>
      
        <!-- <?php for( $i = 1; $i <= 3; $i++ ) { ?>
            <tr>
                <?php for( $j = 1; $j <= 5; $j++) { ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
         bisa seperti ini--> 


         <!-- <?php for( $i = 1; $i <= 3; $i++ ) : ?>
            <tr>
            <?php for( $j = 1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?> atau bisa seperti ini, ":" pengganti buka kurung kurawal sdgkn "endfor;" pengganti tutup kurung kurawal -->

    </table>

</body>
</html>