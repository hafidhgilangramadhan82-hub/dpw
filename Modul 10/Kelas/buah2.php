<?php
class buah2 
{
    public $nama;
    public $warna;
    public $bobot;
    public function set_name($n) {
        $this->nama = $n;
    }

    // PERBAIKAN: Mengubah modifier dari protected menjadi public
    public function set_color($n) {
        $this->warna = $n;
    }

    // PERBAIKAN: Mengubah modifier dari private menjadi public
    public function set_weight($n) {
        $this->bobot = $n;
    }
}

// --- PENGUJIAN INSTANSIASI OBJEK ---

$mango = new buah2();

echo "<h2>PENGUJIAN VISIBILITY MODIFIER PADA METHOD (BUAH 2)</h2>";
echo "========================================================<br>";

// Memanggil method-method pengubah data yang kini sudah bersifat publik
$mango->set_name('Mango');
$mango->set_color('Yellow');
$mango->set_weight('300');

// Menampilkan output hasil eksekusi method
echo "• Nama Buah  : " . $mango->nama . "<br>";
echo "• Warna Buah : " . $mango->warna . "<br>";
echo "• Bobot Buah : " . $mango->bobot . " Gram<br>";

echo "========================================================<br>";


/*
======================================================================
ANALISIS DAN KESIMPULAN HASIL UJICOBA (POIN 6)
======================================================================
1. Karakteristik Hak Akses pada Fungsi (Method Visibility):
   Ujicoba pada struktur berkas buah2.php membuktikan bahwa pembatasan 
   akses modifier (public, protected, private) tidak hanya berlaku pada 
   variabel/properti, melainkan memiliki pengaruh yang sama mutlaknya 
   ketika diterapkan pada fungsi (method).

2. Pembatasan Eksekusi Fungsi Terproteksi (Protected Method):
   Fungsi 'set_color()' yang awalnya berstatus 'protected' menolak 
   instruksi pemanggilan dari luar lingkungan kelas. Karakteristik ini 
   menutup akses interaksi luar secara langsung, namun fungsionalitasnya 
   tetap dapat diwariskan atau dipanggil oleh fungsi di dalam sub-class 
   (kelas turunan).

3. Pembatasan Mutlak Fungsi Privat (Private Method):
   Fungsi 'set_weight()' yang menggunakan pengenal 'private' memicu 
   Fatal Error karena dipanggil dari luar struktur utama kelas. Hak 
   eksekusi metode privat terkunci secara absolut dan hanya bisa dikenali 
   serta dijalankan oleh fungsi internal lain yang berada di dalam 
   induk kelas yang sama.

4. Solusi Standarisasi Akses Objek:
   Guna menjamin fungsi-fungsi manipulasi data objek (seperti Setter) 
   dapat dimanfaatkan oleh berkas eksternal, visibilitas metode tersebut 
   wajib diatur menggunakan tingkat akses 'public'. Hal ini mempertegas 
   bahwa properti dapat diproteksi secara ketat, sementara metode yang 
   mengelolanya bertindak sebagai gerbang interaksi publik yang valid.
======================================================================
*/
?>