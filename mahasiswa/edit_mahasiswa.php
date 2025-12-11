<?php
include '../koneksi.php';

// ambil nim untuk edit
$xnim = $_GET['nim'];
$data = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa WHERE nim='$xnim'");
$mhs = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #f0f6ff;
        }
        .card-custom {
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.15);
        }
    </style>
</head>

<body class="p-4">

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card card-custom p-4">
                <h3 class="text-center mb-4 fw-bold">Edit Data Mahasiswa</h3>

                <form action="proses_editMahasiswa.php" method="post">

                    <!-- NIM (read-only) -->
                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" name="nim" class="form-control" value="<?= $mhs['nim']; ?>" readonly>
                    </div>

                    <!-- Nama -->
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= $mhs['nama']; ?>" required>
                    </div>

                    <!-- Prodi -->
                    <div class="mb-3">
                        <label class="form-label">Prodi</label>
                        <select name="prodi" class="form-select" required>
                            <option value="">-- Pilih Prodi --</option>
                            <option value="TL"   <?= ($mhs['prodi']=='TL') ? 'selected' : ''; ?>>TL</option>
                            <option value="TRPL" <?= ($mhs['prodi']=='TRPL') ? 'selected' : ''; ?>>TRPL</option>
                            <option value="TRM"  <?= ($mhs['prodi']=='TRM') ? 'selected' : ''; ?>>TRM</option>
                            <option value="TRMK" <?= ($mhs['prodi']=='TRMK') ? 'selected' : ''; ?>>TRMK</option>
                        </select>
                    </div>

                    <!-- Angkatan -->
                    <div class="mb-3">
                        <label class="form-label">Angkatan</label>
                        <select name="angkatan" class="form-select" required>
                            <option value="">-- Pilih Angkatan --</option>
                            <?php 
                            $angkatanList = [2018,2019,2020,2021,2022,2023,2024,2025];
                            foreach ($angkatanList as $th) {
                                $sel = ($mhs['angkatan'] == $th) ? "selected" : "";
                                echo "<option value='$th' $sel>$th</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $mhs['email']; ?>" required>
                    </div>

                    <!-- Tombol -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="mahasiswa.php" class="btn btn-secondary">Kembali</a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

</body>
</html>
