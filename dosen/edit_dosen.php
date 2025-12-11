<?php

//membuka jalur ke database
include'../koneksi.php';

// ambil data nidn sebagai acuan
$xnidn = $_GET['nidn'];
// var_dump($xnidn);
// die;
// panggil data yang akan diubah berdasarkan nidn
$data= mysqli_query($conn, "SELECT * FROM tbl_dosen WHERE nidn='$xnidn'");
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
        <form action="proses_editDosen.php" method="post">
        <table>
            <tr>
                <td>NIDN</td>
                <td><input type="text" name="nidn" value="<?php echo $mhs['nidn']; ?>" readonly></td>
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