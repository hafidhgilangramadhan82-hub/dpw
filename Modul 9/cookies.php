<?php
session_start();
if (!isset($_SESSION['user_aktif'])) {
    header("Location: login.php");
    exit();
}
setcookie('user_identity', 'Hafidh Gilang Ramadhan (253307047)', time() + 3600, "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Session & Cookies</title>
</head>
<body>
    <h2>Status Autentikasi</h2>
    <p style="color: green; font-weight: bold;">✓ Berhasil Masuk Menggunakan Session</p>
    <p>User Aktif: <?php echo $_SESSION['user_aktif']; ?></p>
    <hr>
    <h3>Data Teridentifikasi dari Cookie:</h3>
    <p><?php echo isset($_COOKIE['user_identity']) ? $_COOKIE['user_identity'] : "Hafidh Gilang Ramadhan (253307047)"; ?></p>
</body>
</html>