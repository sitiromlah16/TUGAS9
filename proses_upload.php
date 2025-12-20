<?php

//if($_FILES['fileFoto']['size'] > 10000){
   // echo "file terlalu besar";
    //echo "<a href='upload.php'>kembali</a>";
    //exit();
//}

$namaFile= $_FILES['fileFoto']['name'];
$lokasiSementara= $_FILES['fileFoto']['tmp_name'];
$lokasiTujuan= "folderFoto/". $namaFile;

$terupload= move_uploaded_file($lokasiSementara, $lokasiTujuan);

if($terupload){
    echo "Upload File Berhasil <br>";
    echo "Lokasi: ". $lokasiTujuan;

}else {
    echo "Upload Gagal";
    echo "<a href='upload.php'>kembali</a>";
}