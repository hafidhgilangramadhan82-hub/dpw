<?php
// Tugas 11: Menampilkan Pola Segitiga Bintang & Penerapan Break dalam Perulangan

echo "<h2>Bagian 1: Pola Segitiga Bintang</h2>";
echo "-----------------------------------<br>";

$tinggi_segitiga = 10;

// Perulangan bari 1 sampai 10
for ($baris = 1; $baris <= $tinggi_segitiga; $baris++) {
    // Perulangan kolom untuk mencetak bintang sejumlah nomor barisnya
    for ($kolom = 1; $kolom <= $baris; $kolom++) {
        echo "*";
    }
    // Pindah ke baris baru setelah bintang pada baris tersebut selesai dicetak
    echo "<br>";
}

echo "<br>";

echo "<h2>Bagian 2: Implementasi Perulangan dengan Break</h2>";
echo "-----------------------------------<br>";

$batas_maksimal = 10;

// Menjalankan perulangan dari angka 0 sampai kurang dari 10
for ($angka = 0; $angka < $batas_maksimal; $angka++) {
    // Jika angka menyentuh nilai 4, perulangan dihentikan secara paksa
    if ($angka == 4) {
        break;
    }
    echo "Nomor Iterasi : $angka <br>";
}
?>