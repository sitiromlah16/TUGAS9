<?php

//buka jalur ke database
include '../koneksi.php';

//periksa isi data variabel dari metode GET
if(isset($_GET['id_nilai'])) {
    $xidnilai = $_GET['id_nilai'];
}

$queryDelete = "DELETE FROM tbl_nilai WHERE id_nilai='$xidnilai'";
$hasil= mysqli_query($conn, $queryDelete);

if($hasil){
    header('location:nilai.php');
}else{
    echo "hapus data gagal". mysqli_error($conn);
}
?>