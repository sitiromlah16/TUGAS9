<?php
include '../blok.php';
include '../koneksi.php';
$sql = 'SELECT * FROM tbl_matkul ORDER BY kodeMatkul ASC';
$query = mysqli_query($conn, $sql);

if (!$query) {
    die('SQL Error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mata Kuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #eaf2ff;
        }
        .card-custom {
            border-radius: 18px;
            box-shadow: 0px 6px 20px rgba(0,0,0,0.1);
            background: white;
        }
        .table thead {
            background: #0d6efd;
            color: white;
        }
        .btn-custom-add {
            border-radius: 30px;
            padding: 8px 20px;
            background: #198754;
            color: white;
            text-decoration: none;
            font-weight: 500;
        }
        .btn-custom-add:hover {
            background: #157347;
        }
        .btn-back {
            border-radius: 30px;
            padding: 8px 20px;
        }
    </style>
</head>

<body class="p-4">

<div class="container">

    <div class="card card-custom p-4">
        <h2 class="text-center fw-bold mb-4">Data Mata Kuliah</h2>

        <div class="d-flex justify-content-between mb-3">
            <a href="../index.php" class="btn btn-secondary btn-back">Kembali</a>
            <a href="tambah_matkul.php" class="btn-custom-add">+ Tambah Mata Kuliah</a>
        </div>

        <table class="table table-bordered table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>Kode Matkul</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>NIDN Dosen</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $row['kodeMatkul'] ?></td>
                    <td><?= $row['namaMatkul'] ?></td>
                    <td><?= $row['sks'] ?></td>
                    <td><?= $row['nidn'] ?></td>
                    <td>
                        <a href="edit_matkul.php?kodeMatkul=<?= $row['kodeMatkul']; ?>" class="btn btn-primary btn-sm">
                            Ubah
                        </a>
                        <a href="delete_matkul.php?kodeMatkul=<?= $row['kodeMatkul']; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Hapus
                        </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>

        </table>
    </div>

</div>

</body>
</html>

<?php mysqli_free_result($query); ?>
