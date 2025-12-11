<?php

//buka jalur ke database
include '../koneksi.php';

//periksa isi data variabel dari metode GET
if(isset($_GET['nidn'])) {
    $xnidn = $_GET['nidn'];
}

$queryDelete = "DELETE FROM tbl_dosen WHERE nidn='$xnidn'";

$hasil= mysqli_query($conn, $queryDelete);

if($hasil){
    header('location:../index.php');
}else{
    echo "hapus data gagal". mysqli_error($conn);
}
?>