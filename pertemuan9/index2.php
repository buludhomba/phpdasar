<?php
// konek ke db
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dr tabel mhs/query 
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// if( !result ) {
//     echo mysqli_error($conn);
// } => untuk jika kita salah memasukkan nama tabel nya 

// jika mengambil data (fetch) mahasiswa dari object result
// ada 4 cara
// mysqli_fetch_row() mengembalikan array numerik
// mysqli_fetch_assoc() mngmblikn array asosiat
// mysqli_fetch_array() mngmblikn arr num dan assos
// mysqli_fetch_object() 

// $m = mysqli_fetch_row($result);
// var_dump($m);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

    
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i =1; ?>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i ?></td>
        <td>
            <a href="">Ubah</a> |
            <a href="">hapus</a> 
        </td>
        <td><img src="img/<?php echo $row["gambar"]; ?> " alt="" widht="50"></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

</table>

</body>
</html>