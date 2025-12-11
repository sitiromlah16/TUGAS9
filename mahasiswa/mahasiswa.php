<?php
include '../koneksi.php';

$sql = 'SELECT * FROM tbl_mahasiswa ORDER BY nim ASC';
$query = mysqli_query($conn, $sql);

if (!$query) {
    die('SQL Error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #e3f2fd;
        }
        .card-custom {
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.15);
        }
        .table thead {
            background: #0d6efd;
            color: white;
        }
        .btn-back {
            border-radius: 25px;
        }
        .action-buttons a {
            margin: 0 3px;
        }
    </style>
</head>

<body class="p-4">

<div class="container">

    <div class="card card-custom p-4">
        <h2 class="text-center fw-bold mb-4">Data Mahasiswa</h2>

        <div class="d-flex justify-content-between mb-3">
            <a href="../index.php" class="btn btn-secondary btn-back">Kembali</a>
            <a href="tambah_mahasiswa.php" class="btn btn-primary">+ Tambah Mahasiswa</a>
        </div>

        <table class="table table-bordered table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Angkatan</th>
                    <th>Email</th>
                    <th width="150px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $row['nim'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['prodi'] ?></td>
                    <td><?= $row['angkatan'] ?></td>
                    <td><?= $row['email'] ?></td>

                    <td class="action-buttons">
                        <a href="edit_mahasiswa.php?nim=<?= $row['nim']; ?>" 
                           class="btn btn-warning btn-sm">Ubah</a>

                        <a href="delete_mahasiswa.php?nim=<?= $row['nim']; ?>" 
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin ingin menghapus data ini?');">
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
