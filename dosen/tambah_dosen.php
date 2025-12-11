<html>
    <head>
        <title>Form Tambah</title>
    </head>
    <body>
        <h3>Tambah data Dosen</h3>
        <form action="simpan_dosen.php" method="post">
        <table>
            <tr>
                <td>NIDN</td>
                <td><input type="text" name="nidn"></td>
            </tr>
             <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
             <tr>
                <td>Prodi</td>
                <td><select name="prodi" id="">
                    <option value="">--pilih prodi--</option>
            <option value="TL">TL</option>
            <option value="TRPL">TRPL</option>
            <option value="TRM">TRM</option>
            <option value="TRMK">TRMK</option>
            </select>
            </td>
            </tr>
                <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
            
        </table>
        </form>
    </body>
</html>