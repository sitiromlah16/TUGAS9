<?php
include '../koneksi.php';

$vnim = $_POST['nim'];
$vnama = $_POST['nama'];
$vprodi = $_POST['prodi'];  
$vangkatan= $_POST['angkatan'];
$vemail= $_POST['email'];

$queryUpdate = "UPDATE tbl_mahasiswa SET nama='$vnama', prodi='$vprodi', email='$vemail' WHERE nim='$vnim'";

mysqli_query($conn, $queryUpdate);  
header('location:mahasiswa.php');
?>