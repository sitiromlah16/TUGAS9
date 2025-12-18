<?php
include '../blok.php';
//membuka jalur ke database
include'../koneksi.php';

//menampung nilai dari inputan $_POST
$vnim = $_POST['nim'];
$vnama = $_POST['nama'];
$vprodi = $_POST['prodi'];
$vangkatan= $_POST['angkatan'];
$vemail= $_POST['email'];


// sintak query untuk insert data ke tabel
$querySimpan = "INSERT INTO tbl_mahasiswa (nim, nama, prodi, angkatan, email)
VALUES ('$vnim', '$vnama', '$vprodi', '$vangkatan','$vemail')";

//eksekusi query
mysqli_query($conn, $querySimpan);

//pindah halaman ke index
header('location:mahasiswa.php');
?>