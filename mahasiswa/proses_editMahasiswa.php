<?php
include '../koneksi.php';


$namaFile = $_FILES['fileFoto']['name'];
$lokasiSementara = $_FILES['fileFoto']['tmp_name'];
$lokasiTujuan = "../folderFoto/" . $namaFile;

$terupload = move_uploaded_file($lokasiSementara, $lokasiTujuan);


if ($terupload){


$vnim = $_POST['nim'];
$vnama = $_POST['nama'];
$vprodi = $_POST['prodi'];  
$vangkatan= $_POST['angkatan'];
$vemail= $_POST['email'];
$vfoto = $lokasiTujuan;

$queryUpdate = "UPDATE tbl_mahasiswa SET nama='$vnama', prodi='$vprodi', email='$vemail', foto='$vfoto' WHERE nim='$vnim'";

mysqli_query($conn, $queryUpdate);  
header('location:mahasiswa.php');
}else{
    echo "Upload Gagal";
    echo "<a href='tambah_mahasiswa.php'>Kembali</a>";
}
?>