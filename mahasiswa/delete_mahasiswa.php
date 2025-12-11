<?php

//buka jalur ke database
include '../koneksi.php';

//periksa isi data variabel dari metode GET
if(isset($_GET['nim'])) {
    $xnim = $_GET['nim'];
}

$queryDelete = "DELETE FROM tbl_mahasiswa WHERE nim='$xnim'";
$hasil= mysqli_query($conn, $queryDelete);

if($hasil){
    header('location:mahasiswa.php');
}else{
    echo "hapus data gagal". mysqli_error($conn);
}
?>