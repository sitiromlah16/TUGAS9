<?php
include 'koneksi.php';

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
            background: #f2f7ff;
        }
        .card-custom {
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
        }
        .table thead {
            background: #0d6efd;
            color: white;
        }
        .btn-back {
            border-radius: 30px;
        }
    </style>
</head>

<body class="p-4">

<div class="container">

    <div class="card card-custom p-4">
        <h2 class="text-center fw-bold mb-4">Data Nilai Mahasiswa</h2>

        <a href="index.php" class="btn btn-secondary mb-3 btn-back">← Kembali ke Menu</a>

        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>ID Nilai</th>
                    <th>Nilai Angka</th>
                    <th>Nilai Huruf</th>
                    <th>Kode Matkul</th>
                    <th>NIM</th>
                    <th>NIDN (Dosen)</th>
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
