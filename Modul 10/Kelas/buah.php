<?php
// Perbaikan Praktikum: Analisis Visibility Modifier (Public, Protected, Private)

class buah
{
    // Properti bawaan modul dengan hak akses berbeda
    public $nama;
    protected $warna;
    private $berat;

    // Setter & Getter untuk properti protected $warna
    public function setWarna($warnaBuah)
    {
        $this->warna = $warnaBuah;
    }

    public function getWarna()
    {
        return $this->warna;
    }

    // Setter & Getter untuk properti private $berat
    public function setBerat($beratBuah)
    {
        $this->berat = $beratBuah;
    }

    public function getBerat()
    {
        return $this->berat;
    }
}

// --- PENGUJIAN ---

$mango = new buah();

echo "<h2>PENGUJIAN VISIBILITY MODIFIER (CLASS BUAH)</h2>";

// 1. Properti 'public' dapat diakses & diubah langsung dari luar class
$mango->nama = 'Mango';
echo "• Nama Buah (Public)    : " . $mango->nama . "<br>";

// 2. Properti 'protected' wajib diakses lewat fungsi perantara (Setter & Getter)
$mango->setWarna('Yellow');
echo "• Warna Buah (Protected): " . $mango->getWarna() . "<br>";

// 3. Properti 'private' wajib diakses lewat fungsi perantara (Menghilangkan typo ->buah)
$mango->setBerat('300 Gram');
echo "• Berat Buah (Private)  : " . $mango->getBerat() . "<br>";

echo "========================================================<br>";
?>

/*
======================================================================
ANALISIS DAN KESIMPULAN HASIL UJICOBA
======================================================================
1. Sifat Hak Akses Publik (Public Access Level):
    Properti $nama yang dideklarasikan dengan kata kunci public terbukti
    fleksibel dan dinamis. Elemen ini dapat langsung dipanggil, dibaca, 
    dan dimanipulasi nilainya secara bebas dari luar ekosistem internal 
 kelas tanpa memerlukan fungsi bantuan atau perantara.

2. Batasan Keamanan Properti Dilindungi (Protected Access Level):
Ujicoba menunjukkan bahwa properti $warna tidak mengizinkan manipulasi 
langsung dari luar tubuh kelas karena batasan protected. Tingkat akses 
ini menutup diri dari lingkungan luar, namun tetap membuka jalur 
pewarisan data untuk kelas-kelas anak (sub-class) yang diturunkan 
darinya. Penggunaan fungsi Getter dan Setter menjadi jembatan wajib
 untuk mengelola datanya secara aman.

3. Restriksi Ketat Properti Privat (Private Access Level):
Variabel $berat yang menggunakan pengenal private memiliki proteksi data yang paling absolut. Sistem secara otomatis menolak dan memicu Fatal Error terhadap segala bentuk upaya interaksi langsung di luar tubuh kelas, bahkan oleh kelas turunannya sendiri. Isolasi penuh ini memaksa program untuk menggunakan metode Getter dan Setter internal sebagai satu-satunya akses keluar masuk data.

4. Fungsi Enkapsulasi Terhadap Integritas Kode:
Melalui modifikasi penambahan fungsi Getter dan Setter, kesalahan struktur (Fatal Error) dapat teratasi dengan sempurna. Pola ini membuktikan bahwa pembatasan akses properti (Enkapsulasi) yang dikombinasikan dengan metode perantara publik sangat penting dalam menjaga kemurnian dan validitas data objek agar tidak rusak oleh instruksi luar yang tidak terstandarisasi.
======================================================================
*/