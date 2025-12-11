<?php
include '../koneksi.php';

// ambil id_nilai
$xidnilai = $_GET['id_nilai'];

// ambil data nilai berdasarkan id_nilai
$data = mysqli_query($conn, "SELECT * FROM tbl_nilai WHERE id_nilai='$xidnilai'");
$mhs = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Nilai Mahasiswa</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #eaf2ff;
        }
        .card-custom {
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0px 6px 20px rgba(0,0,0,0.12);
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

        <h3 class="text-center fw-bold mb-4">Edit Data Nilai</h3>

        <form action="proses_editNilai.php" method="post">

            <div class="mb-3">
                <label class="form-label">ID Nilai</label>
                <input type="text" name="id_nilai" class="form-control" value="<?= $mhs['id_nilai']; ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Nilai Angka</label>
                <input type="number" name="nilai" class="form-control" value="<?= $mhs['nilai']; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Nilai Huruf</label>
                <input type="text" name="nilaiHuruf" class="form-control" value="<?= $mhs['nilaiHuruf']; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Kode Mata Kuliah</label>
                <input type="text" name="kodeMatkul" class="form-control" value="<?= $mhs['kodeMatkul']; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">NIM Mahasiswa</label>
                <input type="text" name="nim" class="form-control" value="<?= $mhs['nim']; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">NIDN Dosen</label>
                <input type="text" name="nidn" class="form-control" value="<?= $mhs['nidn']; ?>">
            </div>

            <div class="d-grid gap-2 mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="nilai.php" class="btn btn-secondary">Kembali</a>
            </div>

        </form>

    </div>

</div>

</body>
</html>
