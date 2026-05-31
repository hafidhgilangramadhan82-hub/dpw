<?php
// Pastikan kredensial lainnya sudah sesuai dengan pengaturan server Anda
$con = new mysqli("localhost", "root", "", "db_akademik");

// Cek koneksi
if ($con->connect_error) {
    die("Koneksi gagal: " . $con->connect_error);
}

echo "Koneksi ke database berhasil!";
?>