<?php
// Latihan 4: Menampilkan 7 nama hari dengan mekanisme variabel
$hari1 = "Senin";
$hari2 = "Selasa";
$hari3 = "Rabu";
$hari4 = "Kamis";
$hari5 = "Jumat";
$hari6 = "Sabtu";
$hari7 = "Minggu";

echo "<h2>Daftar Nama Hari dalam Seminggu</h2>";
$daftar_hari = [$hari1, $hari2, $hari3, $hari4, $hari5, $hari6, $hari7];

// Menampilkan data
foreach ($daftar_hari as $index => $nama_hari) {
    echo "Hari ke-" . ($index + 1) . ": " . $nama_hari . "<br>";
}
?>