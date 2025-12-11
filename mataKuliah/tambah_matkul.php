<?php
include '../koneksi.php';

$query = "SELECT
tbl_dosen.nidn,
tbl_dosen.nama
from tbl_dosen";
$result=mysqli_query($conn, $query);
?>


<html>
    <head>
        <title>Form Tambah</title>
    </head>
    <body>
        <h3>Tambah data mata kuliah</h3>
        <form action="simpan_matkul.php" method="post">
        <table>
            <tr>
                <td>Kode MK</td>
                <td><input type="text" name="kode_mk"></td>
            </tr>
             <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
             <tr>
                <td>SKS</td>
                <td><input type="text" name="sks">
            </td>
            </tr>
                <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>nidn</td>
                <td>
                    <select name="nidn" id="nidn">
                        <option value="">--pilih nidn--</option>
                        <?php while($row = mysqli_fetch_array($result)) { ?>
                            <option value="<?php echo $row['nidn']; ?>">
                                <?php echo $row['nidn']; ?> | <?php echo $row['nama']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        
        </table>
        </form>
    </body>
</html>