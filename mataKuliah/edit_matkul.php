<?php
include '../koneksi.php';
include '../blok.php';  
if ($_SESSION['role'] == 'mhs') {
    header("location: matkul.php");
    exit();
}

// ambil kode matkul
$xnkodeMatkul = $_GET['kodeMatkul'];

// ambil data matkul
$data = mysqli_query($conn, "SELECT * FROM tbl_matkul WHERE kodeMatkul='$xnkodeMatkul'");
$mhs = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mata Kuliah</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #eef5ff;
        }
        .card-custom {
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0px 6px 20px rgba(0,0,0,0.1);
        }
        .btn-save {
            font-weight: 600;
            border-radius: 6px; 
            padding: 8px 25px;
        }
        .btn-back {
            border-radius: 6px;
            padding: 7px 22px;
            font-weight: 600;
        }
    </style>
</head>

<body class="p-4">

<div class="container col-md-6">

    <div class="card card-custom">

        <h3 class="text-center fw-bold mb-4">Edit Data Mata Kuliah</h3>

       

        <form action="proses_editMatkul.php" method="post">

            <div class="mb-3">
                <label class="form-label">Kode Mata Kuliah</label>
                <input type="text" name="kodeMatkul" class="form-control" value="<?= $mhs['kodeMatkul']; ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Mata Kuliah</label>
                <input type="text" name="namaMatkul" class="form-control" value="<?= $mhs['namaMatkul']; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">SKS</label>
                <input type="number" name="sks" class="form-control" value="<?= $mhs['sks']; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">NIDN Dosen</label>
                <input type="text" name="nidn" class="form-control" value="<?= $mhs['nidn']; ?>">
            </div>

            <div class="d-grid gap-2 mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
                 <a href="matkul.php" class="btn btn-secondary ">Kembali</a>
            </div>

        </form>
    </div>

</div>

</body>
</html>
