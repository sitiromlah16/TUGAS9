<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<style>
    body {
            background: linear-gradient(to right, #b2d8ff, #d7ecff);
        }
        .menu-card {
            transition: 0.3s;
            cursor: pointer;
        }
        .menu-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        .header-box {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
        }
</style>
</head>

<body>
    <div class="container mt-5">

    <div class="text-center header-box mb-5">
        <h1 class="fw-bold">Menu Utama Data Kampus</h1>
        <p class="text-muted">Silahkan pilih data yang ingin dilihat</p>
    </div>

    <div class="row justify-content-center">

        <!-- Card Dosen -->
        <div class="col-md-3 mb-4">
            <div onclick="location.href='dosen.php'" class="card menu-card text-center p-4">
                <img src="https://cdn-icons-png.flaticon.com/128/3135/3135755.png" width="70" class="mx-auto mb-3">
                <h5 class="fw-bold">Data Dosen</h5>
                <p class="text-muted">Lihat semua data dosen</p>
            </div>
        </div>

        <!-- Card Mahasiswa -->
        <div class="col-md-3 mb-4">
            <div onclick="location.href='mahasiswa.php'" class="card menu-card text-center p-4">
                <img src="https://cdn-icons-png.flaticon.com/128/3135/3135810.png" width="70" class="mx-auto mb-3">
                <h5 class="fw-bold">Data Mahasiswa</h5>
                <p class="text-muted">Lihat semua data mahasiswa</p>
            </div>
        </div>

        <!-- Card Mata Kuliah -->
        <div class="col-md-3 mb-4">
            <div onclick="location.href='matkul.php'" class="card menu-card text-center p-4">
                <img src="https://cdn-icons-png.flaticon.com/128/2995/2995620.png" width="70" class="mx-auto mb-3">
                <h5 class="fw-bold">Data Mata Kuliah</h5>
                <p class="text-muted">Lihat daftar mata kuliah</p>
            </div>
        </div>

        <!-- Card Nilai -->
        <div class="col-md-3 mb-4">
            <div onclick="location.href='nilai.php'" class="card menu-card text-center p-4">
                <img src="https://cdn-icons-png.flaticon.com/128/1828/1828884.png" width="70" class="mx-auto mb-3">
                <h5 class="fw-bold">Data Nilai</h5>
                <p class="text-muted">Lihat nilai mahasiswa</p>
            </div>
        </div>

    </div>
</div>
</body>

</html>