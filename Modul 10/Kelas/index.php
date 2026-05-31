<?php

require_once('kelas/manusia.php');

echo "<h2>PENGUJIAN INSTANSIASI OBJEK (CLASS MANUSIA)</h2>";
echo "========================================================<br>";

// --- INSTANSIASI OBJEK ---

// Objek 1: Andi Pratama
$andi = new Manusia();
$andi->setNama("Andi Pratama");
$andi->setUmur(25); 

// Objek 2: Budi Santoso
$budi = new Manusia();
$budi->setNama("Budi Santoso");
$budi->setUmur(30); 

// Objek 3: Identitas Sendiri (Bersih dari tag HTML di dalam string nama)
$saya = new Manusia();
$saya->setNama("Hafidh Gilang Ramadhan"); 
$saya->setUmur(19);       


// --- OUTPUT DISPLAY DATA ---

echo "<h3>1. Informasi Objek: Andi</h3>";
echo "• Nama Lengkap : " . $andi->getNama() . "<br>";
echo "• Usia/Umur    : " . $andi->getUmur() . " Tahun<br>";
echo "• Nomor NIK    : " . $andi->getNIK() . "<br>";
echo "--------------------------------------------------------<br>";

echo "<h3>2. Informasi Objek: Budi</h3>";
echo "• Nama Lengkap : " . $budi->getNama() . "<br>";
echo "• Usia/Umur    : " . $budi->getUmur() . " Tahun<br>";
echo "• Nomor NIK    : " . $budi->getNIK() . "<br>";
echo "--------------------------------------------------------<br>";

echo "<h3>3. Informasi Objek: Data Mandiri</h3>";
echo "• Nama Lengkap : " . $saya->getNama() . "<br>";
echo "• Usia/Umur    : " . $saya->getUmur() . " Tahun<br>";
echo "• Nomor NIK    : " . $saya->getNIK() . "<br>";
echo "========================================================<br>";


/*
======================================================================
ANALISIS DAN KESIMPULAN HASIL UJICOBA
======================================================================
1. Sifat Hak Akses Publik (Public Access Level):
   Properti $nama yang dideklarasikan dengan kata kunci 'public' terbukti 
   fleksibel dan dinamis. Elemen ini dapat langsung dipanggil, dibaca, 
   dan dimanipulasi nilainya secara bebas dari luar ekosistem internal 
   kelas tanpa memerlukan fungsi bantuan atau perantara.

2. Batasan Keamanan Properti Dilindungi (Protected Access Level):
   Ujicoba menunjukkan bahwa properti $warna tidak mengizinkan manipulasi 
   langsung dari luar tubuh kelas karena batasan 'protected'. Tingkat akses 
   ini menutup diri dari lingkungan luar, namun tetap membuka jalur 
   pewarisan data untuk kelas-kelas anak (sub-class) yang diturutkan darinya. 
   Penggunaan fungsi Getter dan Setter menjadi jembatan wajib untuk 
   mengelola datanya secara aman.

3. Restriksi Ketat Properti Privat (Private Access Level):
   Variabel $berat yang menggunakan pengenal 'private' memiliki proteksi 
   data yang paling absolut. Sistem secara otomatis menolak dan memicu 
   Fatal Error terhadap segala bentuk upaya interaksi langsung di luar 
   tubuh kelas, bahkan oleh kelas turunannya sendiri. Isolasi penuh ini 
   memaksa program untuk menggunakan metode Getter dan Setter internal 
   sebagai satu-satunya akses keluar masuk data.

4. Fungsi Enkapsulasi Terhadap Integritas Kode:
   Melalui modifikasi penambahan fungsi Getter dan Setter, kesalahan 
   struktur (Fatal Error) dapat teratasi dengan sempurna. Pola ini 
   membuktikan bahwa pembatasan akses properti (Enkapsulasi) yang 
   dikombinasikan dengan metode perantara publik sangat penting dalam 
   menjaga kemurnian dan validitas data objek agar tidak rusak oleh 
   instruksi luar yang tidak terstandarisasi.
======================================================================
*/
?>