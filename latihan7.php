<?php
// Tugas 13: Manipulasi Array (Indexed Array dan Associative Array)

echo "<h2>Bagian 1: Indexed Array (Data Buah)</h2>";
echo "--------------------------------------------------<br>";

// Menggunakan short array syntax [] agar lebih modern
$nama_buah = ["Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis"];

// Menampilkan kombinasi data sesuai indeks array
echo "Saya suka " . $nama_buah[0] . ", " . $nama_buah[1] . " dan " . $nama_buah[2] . ".<br><br>";

// Menampilkan data buah satu per satu berdasarkan request modul
echo "• Buah pilihan ke-2 : " . $nama_buah[1] . "<br>";
echo "• Buah pilihan ke-3 : " . $nama_buah[2] . "<br>";
echo "• Buah pilihan ke-4 : " . $nama_buah[3] . "<br>";
echo "• Buah pilihan ke-5 : " . $nama_buah[4] . "<br>";

echo "<br>";

echo "<h2>Bagian 2: Associative Array (Data Umur)</h2>";
echo "--------------------------------------------------<br>";

// Deklarasi associative array menggunakan key => value
$daftar_umur = [
    "Andi"  => "35 Tahun", 
    "Ben"   => "37 Tahun", 
    "Joe"   => "43 Tahun"
];

// Menambahkan data baru ke dalam array dengan key spesifik
$daftar_umur['Ahmad'] = "50 Tahun";

// Menampilkan data tunggal menggunakan key
echo "Informasi Khusus: Umur Andi adalah " . $daftar_umur['Andi'] . "<br><br>";

echo "<strong>Daftar Seluruh Data Umur:</strong><br>";
// Mengurai seluruh isi associative array menggunakan foreach loop
foreach ($daftar_umur as $nama => $usia) {
    echo "- Nama: $nama, Berusia: $usia <br>";
}

echo "--------------------------------------------------<br>";
?>