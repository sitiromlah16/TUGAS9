<?php
include '../blok.php';
if ($_SESSION['role'] == 'mhs') {
    header("location: matkul.php");
    exit();
}
?>
<?php
include '../koneksi.php';

$query = "SELECT tbl_dosen.nidn, tbl_dosen.nama FROM tbl_dosen";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Kuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #eef5ff;
        }
        .card-custom {
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0px 6px 20px rgba(0,0,0,0.1);
        }
        .btn-save {
            padding: 8px 30px;
            font-weight: 600;
            border-radius: 30px;
        }
    </style>
</head>

<body class="p-4">

<div class="container col-md-6">

    <div class="card card-custom">
        <h3 class="text-center mb-4 fw-bold">Tambah Data Mata Kuliah</h3>

        <form action="simpan_matkul.php" method="post">

            <div class="mb-3">
                <label class="form-label">Kode Mata Kuliah</label>
                <input type="text" name="kodeMatkul" class="form-control" placeholder="Masukkan kode matkul">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Mata Kuliah</label>
                <input type="text" name="namaMatkul" class="form-control" placeholder="Masukkan nama matkul">
            </div>

            <div class="mb-3">
                <label class="form-label">SKS</label>
                <select name="sks" class="form-select">
                    <option value="">-- pilih SKS --</option>
                    <option value="1">1 SKS</option>
                    <option value="2">2 SKS</option>
                    <option value="3">3 SKS</option>
                    <option value="4">4 SKS</option>
                    <option value="5">5 SKS</option>
                    <option value="6">6 SKS</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Dosen Pengampu (NIDN)</label>
                <select name="nidn" class="form-select">
                    <option value="">-- pilih NIDN --</option>
                    <?php while($row = mysqli_fetch_array($result)) { ?>
                        <option value="<?= $row['nidn']; ?>">
                            <?= $row['nidn']; ?> | <?= $row['nama']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-save">Simpan</button>
            </div>

        </form>
    </div>

</div>

</body>
</html>
