<?php

// <!-- koneksi ke database -->
$conn = mysqli_connect("localhost", "root", "", "phpdasar"); 

// proses mngmbil data kita lakukan di function ini
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
       $rows[] = $row; 
    }
    return $rows;

}

?>