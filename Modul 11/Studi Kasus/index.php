<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Akademik</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .menu-container { display: flex; justify-content: center; gap: 15px; margin-top: 20px; }
        .btn { 
            display: inline-block; 
            padding: 15px 25px; 
            border: 1px solid #ccc; 
            border-radius: 8px; 
            text-decoration: none; 
            color: #333; 
            font-weight: bold;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .btn:hover { background-color: #f5f5f5; }
    </style>
</head>
<body>

    <h2>Sistem Informasi Akademik</h2>
    <p>Silakan pilih menu manajemen data di bawah ini:</p>

    <div class="menu-container">
    <a class="btn" href="../Dosen/viewdosen.php">Manajemen Dosen</a>

    <a class="btn" href="Mahasiswa/view_mahasiswa.php">Manajemen Mahasiswa</a>

    <a class="btn" href="Mata Kuliah/viewmatakuliah.php">Manajemen Mata Kuliah</a>
</div>

</body>
</html>