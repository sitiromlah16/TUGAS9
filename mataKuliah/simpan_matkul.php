<?php
//membuka jalur ke database
include'../koneksi.php';

//menampung nilai dari inputan $_POST
$vkodeMatkul = $_POST['kodeMatkul'];
$vnamaMatkul = $_POST['namaMatkul'];
$vsks = $_POST['sks'];  
$vnidn= $_POST['nidn'];


// sintak query untuk insert data ke tabel
$querySimpan = "INSERT INTO tbl_matkul (kodeMatkul, namaMatkul, sks, nidn)
VALUES ('$vkodeMatkul', '$vnamaMatkul', '$vsks', '$vnidn')";

//eksekusi query
mysqli_query($conn, $querySimpan);

//pindah halaman ke index
header('location:matkul.php');
?>