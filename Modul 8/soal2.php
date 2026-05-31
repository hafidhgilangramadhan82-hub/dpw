<?php
// Tugas 17: Soal Cerita 2 (soal2.php) - Menghitung Banyak Pecahan Uang Ani

$total_uang = 1387500;

echo "<h2>Analisis Pecahan Uang Penarikan Bank</h2>";
echo "Jumlah Penarikan Tabungan: <strong>Rp " . number_format($total_uang, 0, ',', '.') . ",-</strong><br>";

// Daftar pecahan uang yang berlaku berdasarkan soal
$daftar_pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];
$sisa_dana = $total_uang;

echo "Rincian pecahan yang diperoleh:<br>";

foreach ($daftar_pecahan as $nominal) {
    // Menghitung jumlah lembar/koin pecahan
    $jumlah_lembar = intdiv($sisa_dana, $nominal);
    
    // Menghitung sisa dana setelah dikurangi pecahan tersebut
    $sisa_dana = $sisa_dana % $nominal;
    
    // Hanya menampilkan pecahan yang memiliki lembaran/koin lebih dari 0
    echo "• Nominal Rp " . str_pad(number_format($nominal, 0, ',', '.'), 7, ' ', STR_PAD_LEFT) . " : $jumlah_lembar lembar/koin<br>";
}

echo "Sisa Uang yang Tidak Terpecah: Rp " . number_format($sisa_dana, 0, ',', '.') . ",-<br>";
?>