<?php
// 1. Aktifkan error reporting di baris paling atas agar bisa mendeteksi masalah
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 2. Koneksi ke database
$con = new mysqli("localhost", "root", "", "db_akademik");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// 3. Pastikan parameter 'id' ada sebelum diakses
if (!isset($_GET['id'])) {
    die("Error: Parameter 'id' tidak ditemukan di URL.");
}

$input = $_GET['id']; // Tidak perlu real_escape_string jika menggunakan prepared statement

// 4. Membuat query dengan prepared statement
$statement = $con->prepare("SELECT namaDosen FROM t_dosen WHERE idDosen = ?");

if (!$statement) {
    die("Query error: " . $con->error);
}

// 5. Mengikat parameter (i = integer)
$statement->bind_param("i", $input);

// 6. Mengeksekusi query
$statement->execute();

// 7. Mendapatkan hasil
$hasil = $statement->get_result();

// 8. Menampilkan hasil
if ($hasil->num_rows > 0) {
    while($baris = $hasil->fetch_assoc()){
        echo htmlspecialchars($baris['namaDosen']) . "<br>";
    }
} else {
    echo "Data dosen dengan ID tersebut tidak ditemukan.";
}

// 9. Menutup statement dan koneksi
$statement->close();
$con->close();
?>