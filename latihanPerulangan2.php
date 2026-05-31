<?php

// Tugas 12: Mengecek Nilai di Dalam Array Apakah Ganjil atau Genap

$kumpulan_angka = [12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256];

echo "<h2>Analisis Bilangan (Ganjil / Genap)</h2>";
echo "--------------------------------------------------<br>";

foreach ($kumpulan_angka as $bilangan) {

    if ($bilangan % 2 == 0) {
        $status = "Genap";
    } else {
        $status = "Ganjil";
    }
    
    // Menampilkan baris hasil
    echo "Angka <strong>$bilangan</strong> adalah bilangan : $status <br>";
}
?>