<?php
include '../blok.php';
//membuka jalur ke database
include'../koneksi.php';

//menampung nilai dari inputan $_POST

$vnilai = $_POST['nilai'];
$vnilaiHuruf = $_POST['nilaiHuruf'];
$vkodematkul = $_POST['kodeMatkul'];
$vnim = $_POST['nim'];
$vnidn = $_POST['nidn'];

// sintak query untuk insert data ke tabel
$querySimpan = "INSERT INTO tbl_nilai (nilai, nilaiHuruf, kodeMatkul, nim, nidn)
VALUES ( '$vnilai', '$vnilaiHuruf', '$vkodematkul', '$vnim', '$vnidn')";
//eksekusi query
mysqli_query($conn, $querySimpan);

//pindah halaman ke index
header('location:nilai.php');
?>