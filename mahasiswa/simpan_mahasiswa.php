<?php
include '../blok.php';
//membuka jalur ke database
include '../koneksi.php';

$namaFile = $_FILES['fileFoto']['name'];
$lokasiSementara = $_FILES['fileFoto']['tmp_name'];
$lokasiTujuan = "../folderFoto/" . $namaFile;

$terupload = move_uploaded_file($lokasiSementara, $lokasiTujuan);
if ($terupload){

//menampung nilai dari inputan $_POST
$vnim = $_POST['nim'];
$vnama = $_POST['nama'];
$vprodi = $_POST['prodi'];
$vangkatan= $_POST['angkatan'];
$vemail= $_POST['email'];
$vfoto = $lokasiTujuan;


// sintak query untuk insert data ke tabel
$querySimpan = "INSERT INTO tbl_mahasiswa (nim, nama, prodi, angkatan, email, foto)
VALUES ('$vnim', '$vnama', '$vprodi', '$vangkatan','$vemail', '$vfoto')";

//eksekusi query
mysqli_query($conn, $querySimpan);

//pindah halaman ke index
header('location:mahasiswa.php');
}else{
    echo "Upload Gagal";
    echo "<a href='tambah_mahasiswa.php'>Kembali</a>";
}
?>