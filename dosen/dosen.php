<?php
include '../koneksi.php';
$sql = 'SELECT * FROM tbl_dosen ORDER BY nidn ASC';
$query = mysqli_query($conn, $sql);

if (!$query) {
    die('SQL Error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Dosen</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #e9f4ff;
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
            border-radius: 30px;
        }
        .action-btn a {
            text-decoration: none;
            margin: 0 3px;
        }
    </style>
</head>

<body class="p-4">

<div class="container">

    <div class="card card-custom p-4">
        <h2 class="text-center mb-4 fw-bold">Data Dosen</h2>

        <div class="d-flex justify-content-between mb-3">
            <a href="../index.php" class="btn btn-secondary btn-back">Kembali</a>
            <a href="tambah_dosen.php" class="btn btn-primary">+ Tambah Dosen</a>
        </div>

        <table class="table table-bordered table-striped text-center align-middle">
            <thead>
                <tr>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Email</th>
                    <th width="150px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $row['nidn'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['prodi'] ?></td>
                    <td><?= $row['email'] ?></td>

                    <td class="action-btn">
                        <a href="edit_dosen.php?nidn=<?= $row['nidn']; ?>" class="btn btn-warning btn-sm">Ubah</a>
                        <a href="delete_dosen.php?nidn=<?= $row['nidn']; ?>" 
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

<?php
mysqli_free_result($query);
?>
