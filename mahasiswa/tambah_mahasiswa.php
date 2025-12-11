<html>
    <head>
        <title>Form Tambah</title>
    </head>
    <body>
        <h3>Tambah data mahasiswa</h3>
        <form action="simpan_mahasiswa.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
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
                <td>Angkatan</td>
                <td><select name="angkatan" id="">
                    <option value="">--pilih angkatan--</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
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