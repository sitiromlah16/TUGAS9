<?php
include'../koneksi.php';

$vkodeMatkul = $_POST['kodeMatkul'];
$vnamaMatkul = $_POST['namaMatkul'];
$vsks = $_POST['sks'];  
$vnidn= $_POST['nidn'];

$queryUpdate = "UPDATE tbl_matkul SET namaMatkul='$vnamaMatkul', sks='$vsks', nidn='$vnidn' WHERE kodeMatkul='$vkodeMatkul'";
mysqli_query($conn, $queryUpdate);  
header('location:matkul.php');
?>