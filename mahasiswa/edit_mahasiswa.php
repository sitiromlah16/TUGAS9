<?php

//membuka jalur ke database
include'../koneksi.php';

// ambil data nim sebagai acuan
$xnim = $_GET['nim'];
// var_dump($xnim);
// die;
// panggil data yang akan diubah berdasarkan nim
$data= mysqli_query($conn, "SELECT * FROM tbl_mahasiswa WHERE nim='$xnim'");
// var_dump($data);
// die;
//pindahkan data ke variabel baru
$mhs = mysqli_fetch_array($data);
?>

<html>
    <head>
        <title>Form Edit</title>
    </head>
    <body>
        <h3>Edit data mahasiswa</h3>
        <form action="proses_editMahasiswa.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $mhs['nim']; ?>" readonly></td>
            </tr>
             <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $mhs['nama']; ?>"></td>
            </tr>
             <tr>
                <td>Prodi</td>
                <td><select name="prodi" id="">
                    <option value="">--pilih prodi--</option>
            <option value="TL" <?php echo ($mhs['prodi'] == 'TL') ? 'selected' : ''; ?>>TL</option>
            <option value="TRPL" <?php echo ($mhs['prodi'] == 'TRPL') ? 'selected' : ''; ?>>TRPL</option>
            <option value="TRM" <?php echo ($mhs['prodi'] == 'TRM') ? 'selected' : ''; ?>>TRM</option>
            <option value="TRMK" <?php echo ($mhs['prodi'] == 'TRMK') ? 'selected' : ''; ?>>TRMK</option>
            </select>
            </td>
            <tr>
                <td>Angkatan</td>
                <td><select name="angkatan" id="">
                    <option value="2018" <?php echo ($mhs['angkatan'] == '2018') ? 'selected' : ''; ?>>2018</option>  
                    <option value="2019" <?php echo ($mhs['angkatan'] == '2019') ? 'selected' : ''; ?>>2019</option>
                    <option value="2020" <?php echo ($mhs['angkatan'] == '2020') ? 'selected' : ''; ?>>2020</option>
                    <option value="2021" <?php echo ($mhs['angkatan'] == '2021') ? 'selected' : ''; ?>>2021</option>
                    <option value="2022" <?php echo ($mhs['angkatan'] == '2022') ? 'selected' : ''; ?>>2022</option>
                    <option value="2023" <?php echo ($mhs['angkatan'] == '2023') ? 'selected' : ''; ?>>2023</option>
                    <option value="2024" <?php echo ($mhs['angkatan'] == '2024') ? 'selected' : ''; ?>>2024</option>
                    <option value=""></option>2025" <?php echo ($mhs['angkatan'] == '2025') ? 'selected' : ''; ?>>2025</option>
            </select>
            </tr>

            </tr>
                <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $mhs['email']; ?>"></td>
            
            </tr>
            <tr>
                <td><input type="submit" value="Update"></td>
            </tr>
            
        </table>
        </form>
    </body>
</html>