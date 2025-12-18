<?php
include '../blok.php';  
include '../koneksi.php';

$sql = 'SELECT * FROM tbl_nilai';
$query = mysqli_query($conn, $sql);

if (!$query) {
    die('SQL Error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Nilai Mahasiswa</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #eef5ff;
        }
        .card-custom {
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0px 6px 18px rgba(0,0,0,0.1);
        }
        .table thead {
            background: #0d6efd;
            color: white;
        }
        .btn-add {
            padding: 8px 18px;
            border-radius: 8px;
            font-weight: 600;
        }
        .btn-back {
            border-radius: 8px;
            padding: 8px 18px;
            font-weight: 600;
        }
        .btn-action {
            padding: 5px 12px;
            border-radius: 6px;
        }
    </style>
</head>

<body class="p-4">

<div class="container">

    <div class="card card-custom">

        <h2 class="text-center fw-bold mb-4">Data Nilai Mahasiswa</h2>

        <div class="d-flex justify-content-between mb-3">
            <a href="../index.php" class="btn btn-secondary btn-back">Kembali</a>
            <a href="tambah_nilai.php" class="btn btn-primary btn-add">+ Tambah Nilai</a>
        </div>

        <table class="table table-bordered table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>ID Nilai</th>
                    <th>Nilai Angka</th>
                    <th>Nilai Huruf</th>
                    <th>Kode Matkul</th>
                    <th>NIM</th>
                    <th>NIDN</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $row['id_nilai'] ?></td>
                    <td><?= $row['nilai'] ?></td>
                    <td><?= $row['nilaiHuruf'] ?></td>
                    <td><?= $row['kodeMatkul'] ?></td>
                    <td><?= $row['nim'] ?></td>
                    <td><?= $row['nidn'] ?></td>
                    <td>
                        <a href="edit_nilai.php?id_nilai=<?= $row['id_nilai']; ?>" 
                           class="btn btn-warning btn-sm btn-action">Ubah</a>
                        <a href="delete_nilai.php?id_nilai=<?= $row['id_nilai']; ?>" 
                           class="btn btn-danger btn-sm btn-action"
                           onclick="return confirm('Yakin ingin menghapus nilai ini?')">
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
