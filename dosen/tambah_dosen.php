<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Dosen</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fa;
        }
        .card {
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow p-4">
                    <h3 class="text-center mb-4">Tambah Data Dosen</h3>

                    <form action="simpan_dosen.php" method="post">

                        <div class="mb-3">
                            <label class="form-label">NIDN</label>
                            <input type="text" class="form-control" name="nidn" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" required>
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
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
