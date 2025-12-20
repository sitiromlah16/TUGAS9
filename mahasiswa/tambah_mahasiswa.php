<?php
include '../blok.php';
if ($_SESSION['role'] == 'mhs') {
    header("location: mahasiswa.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Tambah Mahasiswa</title>

    <!-- Bootstrap 5 -->
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
                <h3 class="text-center mb-4 fw-bold">Tambah Data Mahasiswa</h3>

                <form action="simpan_mahasiswa.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" name="nim" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Prodi</label>
                        <select name="prodi" class="form-select" required>
                            <option value="">-- Pilih Prodi --</option>
                            <option value="TL">TL</option>
                            <option value="TRPL">TRPL</option>
                            <option value="TRM">TRM</option>
                            <option value="TRMK">TRMK</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Angkatan</label>
                        <select name="angkatan" class="form-select" required>
                            <option value="">-- Pilih Angkatan --</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        </select>
                    </div>
                     <div class="mb-3">
                        <label class="form-label">foto</label>
                        <input type="file" name="fileFoto" class="form-control" required>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="mahasiswa.php" class="btn btn-secondary">Kembali</a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

</body>
</html>
