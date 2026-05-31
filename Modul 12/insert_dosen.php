<?php
$con = new mysqli("localhost", "root", "", "db_akademik");

if ($con->connect_error) {
    die("Koneksi gagal: " . $con->connect_error);
}

// Gunakan koma untuk memasukkan banyak data sekaligus dalam satu perintah INSERT
$sql = "INSERT INTO t_dosen (idDosen, namaDosen, noHP) VALUES 
        (10, 'Rahmat Dwi Prasetya', '08123456789'),
        (11, 'Angger Binuko', '08198765432'),
        (12, 'Rahmania Kumalasari', '08134567890'),
        (13, 'Lulfiyah Dwi Setia', '08145678901')";

if ($con->query($sql) === TRUE) {
    echo "Semua data dosen berhasil ditambahkan!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>