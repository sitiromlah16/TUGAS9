<?php
//membuka jalur ke database
include'../koneksi.php';

//menampung nilai dari inputan $_POST
$vnidn = $_POST['nidn'];
$vnama = $_POST['nama'];
$vprodi = $_POST['prodi'];
$vemail= $_POST['email'];

// sintak query untuk insert data ke tabel
$querySimpan = "INSERT INTO tbl_dosen(nidn, nama, prodi, email)
VALUES ('$vnidn', '$vnama', '$vprodi', '$vemail')";

//eksekusi query
mysqli_query($conn, $querySimpan);

//pindah halaman ke index
header('location:dosen.php');
?>