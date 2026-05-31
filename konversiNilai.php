<?php
// Tugas 7: Konversi Nilai Angka ke Huruf

$nilai_angka = 85;
$nilai_huruf = "";

// Proses pengecekan kondisi menggunakan if-else
if ($nilai_angka >= 90 && $nilai_angka <= 100) {
    $nilai_huruf = "A";
} elseif ($nilai_angka >= 80 && $nilai_angka <= 89) {
    $nilai_huruf = "AB";
} elseif ($nilai_angka >= 70 && $nilai_angka <= 79) {
    $nilai_huruf = "B";
} elseif ($nilai_angka >= 60 && $nilai_angka <= 69) {
    $nilai_huruf = "BC";
} else {
    $nilai_huruf = "C";
}

// Menampilkan output
echo "<h2>Program Konversi Nilai</h2>";
echo "============================<br>";
echo "Nilai Angka : $nilai_angka <br>";
echo "Nilai Huruf : <strong>$nilai_huruf</strong> <br>";
echo "============================<br>";
?>