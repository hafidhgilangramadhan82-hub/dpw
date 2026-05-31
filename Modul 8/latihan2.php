<?php
$salam = "Halo, selamat belajar!";
$kampus = "Politeknik Negeri Madiun";
$nilai_a = 10;
$nilai_b = 4.5;
    
// tampilkan isi variabel ke dalam tag paragraf HTML
echo "<p>Pesan teks: $salam</p>";
echo "<p>Nilai bilangan bulat (integer): $nilai_a</p>";
echo "<p>Nilai bilangan pecahan (float): $nilai_b</p>";
echo "Saat ini saya kuliah di " . $kampus . "<br>";
echo "Hasil penjumlahan variabel: " . ($nilai_a + $nilai_b);

// Deklarasi dan pemanggilan konstanta PHP
define("NAMA_KULIAH", "Desain Pemrograman Web");
echo "<br>Mata Kuliah: " . NAMA_KULIAH;
?>