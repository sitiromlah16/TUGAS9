<?php

//buka jalur ke database
include '../blok.php';  
if ($_SESSION['role'] == 'mhs') {
    header("location: matkul.php");
    exit();
}
include '../koneksi.php';

//periksa isi data variabel dari metode GET
if(isset($_GET['kodeMatkul'])) {
    $kodeMatkul = $_GET['kodeMatkul'];
}

$queryDelete = "DELETE FROM tbl_matkul WHERE kodeMatkul='$kodeMatkul'";
$hasil= mysqli_query($conn, $queryDelete);

if($hasil){
    header('location:matkul.php');
}else{
    echo "hapus data gagal". mysqli_error($conn);
}
?>