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

function tambah($data) {
    global $conn;

     $nim = $data["nim"];
     $nama = $data["nama"];
     $email = $data["email"];
     $jurusan = $data["jurusan"];
     $gambar = $data["gambar"];

    //  query insert data
    $query = "INSERT INTO mahasiswa
    VALUES
    ('', '$nim', '$nama', '$email', '$jurusan', '$gambar')

    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>