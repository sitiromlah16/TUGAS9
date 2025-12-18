<?php
// Koneksi database
include '../koneksi.php';
include '../blok.php';  
if ($_SESSION['role'] == 'mhs') {
    header("location: dosen.php");
    exit();
}
// Ambil NIDN dari parameter GET
$xnidn = $_GET['nidn'];

// Ambil data dosen berdasarkan NIDN
$data = mysqli_query($conn, "SELECT * FROM tbl_dosen WHERE nidn='$xnidn'");
$mhs = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Dosen</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #eef6ff;
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
                <h3 class="text-center mb-4 fw-bold">Edit Data Dosen</h3>

                <form action="proses_editDosen.php" method="post">

                    <div class="mb-3">
                        <label class="form-label">NIDN</label>
                        <input type="text" name="nidn" class="form-control" 
                               value="<?= $mhs['nidn']; ?>" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" 
                               value="<?= $mhs['nama']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Prodi</label>
                        <select name="prodi" class="form-select" required>
                            <option value="">-- Pilih Prodi --</option>
                            <option value="TL"   <?= ($mhs['prodi'] == 'TL') ? 'selected' : ''; ?>>TL</option>
                            <option value="TRPL" <?= ($mhs['prodi'] == 'TRPL') ? 'selected' : ''; ?>>TRPL</option>
                            <option value="TRM"  <?= ($mhs['prodi'] == 'TRM') ? 'selected' : ''; ?>>TRM</option>
                            <option value="TRMK" <?= ($mhs['prodi'] == 'TRMK') ? 'selected' : ''; ?>>TRMK</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" 
                               value="<?= $mhs['email']; ?>" required>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="dosen.php" class="btn btn-secondary">Kembali</a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

</body>
</html>
