<?php
include '../koneksi.php';
include '../blok.php';
if ($_SESSION['role'] == 'mhs') {
    header("location: nilai.php");
    exit();
}


$queryDosen = "SELECT nidn, nama FROM tbl_dosen";
$resultDosen = mysqli_query($conn, $queryDosen);

$queryMahasiswa = "SELECT nim, nama FROM tbl_mahasiswa";
$resultMahasiswa = mysqli_query($conn, $queryMahasiswa);

$queryMataKuliah = "SELECT kodeMatkul, namaMatkul FROM tbl_matkul";
$resultMataKuliah = mysqli_query($conn, $queryMataKuliah);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Nilai</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #eef5ff;
        }

        .card-custom {
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.1);
        }

        .btn-save {
            padding: 8px 25px;
            font-weight: 600;
            border-radius: 8px;
        }

        .btn-back {
            padding: 8px 20px;
            border-radius: 8px;
            font-weight: 600;
        }
    </style>
</head>

<body class="p-4">

    <div class="container col-md-6">

        <div class="card card-custom">

            <h3 class="text-center fw-bold mb-4">Tambah Data Nilai</h3>

            <form action="simpan_nilai.php" method="post">

                <div class="mb-3">
                    <label class="form-label">Nilai Angka</label>
                    <input type="number" name="nilai" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nilai Huruf</label>
                    <input type="text" name="nilaiHuruf" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kode Mata Kuliah</label>
                    <select name="kodeMatkul" class="form-select" required>
                        <option value="">-- Pilih Kode Matkul --</option>
                        <?php while ($d = mysqli_fetch_assoc($resultMataKuliah)) { ?>
                            <option value="<?= $d['kodeMatkul']; ?>">
                                <?= $d['kodeMatkul'] . " - " . $d['namaMatkul']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">NIM Mahasiswa</label>
                    <select name="nim" class="form-select" required>
                        <option value="">-- Pilih NIM --</option>
                        <?php while ($d = mysqli_fetch_assoc($resultMahasiswa)) { ?>
                            <option value="<?= $d['nim']; ?>">
                                <?= $d['nim'] . " - " . $d['nama']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">NIDN Dosen</label>
                    <select name="nidn" class="form-select" required>
                        <option value="">-- Pilih NIDN --</option>
                        <?php while ($d = mysqli_fetch_assoc($resultDosen)) { ?>
                            <option value="<?= $d['nidn']; ?>">
                                <?= $d['nidn'] . " - " . $d['nama']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="nilai.php" class="btn btn-secondary">Kembali</a>
                </div>

            </form>

        </div>

    </div>

</body>
</html>
