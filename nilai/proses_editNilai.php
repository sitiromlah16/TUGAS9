<?php
include'../koneksi.php';

$vidnilai = $_POST['id_nilai'];
$vnilai = $_POST['nilai'];
$vnilaiHuruf = $_POST['nilaiHuruf'];
$vkodematkul = $_POST['kodeMatkul'];
$vnim = $_POST['nim'];
$vnidn = $_POST['nidn'];

$queryUpdate = "UPDATE tbl_nilai SET nilai='$vnilai', nilaiHuruf='$vnilaiHuruf', kodeMatkul='$vkodematkul', nim='$vnim', nidn='$vnidn' WHERE id_nilai='$vidnilai'";

mysqli_query($conn, $queryUpdate);  
header('location:nilai.php');
?>