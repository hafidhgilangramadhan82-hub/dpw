<?php
// Tugas 16: Soal Cerita 1 (soal1.php) - Menghitung Gaji Bersih Obi

$gaji_pokok = 3250000;
$tunjangan = 1200000;

// Menghitung Gaji Kotor
$gaji_kotor = $gaji_pokok + $tunjangan;

// Menghitung Pajak Penghasilan (10% dari Gaji Kotor)
$pajak_pph = $gaji_kotor * 0.10;

// Menghitung Gaji Bersih akhir
$gaji_bersih = $gaji_kotor - $pajak_pph;

echo "<h2>Rincian Gaji Bersih Karyawan</h2>";

echo "Nama Karyawan    : Obi <br>";
echo "Gaji Pokok       : Rp " . number_format($gaji_pokok, 0, ',', '.') . ",-<br>";
echo "Tunjangan        : Rp " . number_format($tunjangan, 0, ',', '.') . ",-<br>";
echo "Total Gaji Kotor : Rp " . number_format($gaji_kotor, 0, ',', '.') . ",-<br>";
echo "Potongan Pajak   : Rp " . number_format($pajak_pph, 0, ',', '.') . ",-<br>";

echo "<strong>Gaji Bersih Diterima : Rp " . number_format($gaji_bersih, 0, ',', '.') . ",-</strong><br>";
