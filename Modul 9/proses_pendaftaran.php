<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Proses</title>
</head>
<body>
    <h3>Data Berhasil Diterima:</h3>
    <?php
    $method = ($_SERVER['REQUEST_METHOD'] == 'POST') ? $_POST : $_GET;
    ?>
    Selamat datang, <b><?php echo isset($method["nama"]) ? htmlspecialchars($method["nama"]) : ""; ?></b><br>
    NIM : <?php echo isset($method["nim"]) ? htmlspecialchars($method["nim"]) : ""; ?><br>
    Email : <?php echo isset($method["email"]) ? htmlspecialchars($method["email"]) : ""; ?><br>
    Tempat, Tanggal Lahir : <?php echo isset($method["tempat"]) ? htmlspecialchars($method["tempat"]) : ""; ?>, <?php echo isset($method["ttl"]) ? htmlspecialchars($method["ttl"]) : ""; ?><br>
    Alamat : <?php echo isset($method["alamat"]) ? htmlspecialchars($method["alamat"]) : ""; ?><br>
    Jenis Kelamin : <?php echo isset($method["gender"]) ? htmlspecialchars($method["gender"]) : ""; ?><br>
</body>
</html>