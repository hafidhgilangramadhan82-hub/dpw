<?php
// 1. Sesuaikan nama database menjadi 'db_akademik'
$con = new mysqli("localhost", "root", "", "db_akademik");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// 2. Buat query untuk membuat tabel
$q = "CREATE TABLE t_login (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// 3. Kirim query ke server database
$hasil = $con->query($q);

// 4. Periksa hasil pengiriman query
if ($hasil === TRUE) {
    echo "Tabel t_login berhasil dibuat";
} else {
    echo "Tabel gagal dibuat: " . $con->error;
}

// 5. Menutup koneksi
$con->close();
?>