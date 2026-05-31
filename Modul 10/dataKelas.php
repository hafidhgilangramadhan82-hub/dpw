<?php

require_once('kelas/Mahasiswa.php');

// Instansiasi Objek Mahasiswa Baru dengan menginputkan Nama ke Constructor
$mhs1 = new mahasiswa("Hafidh Gilang Ramadhan");

// Mengisi data properti mandiri menggunakan fungsi Setter masing-masing
$mhs1->setNIM("253307047");
$mhs1->setKelas("2B");
$mhs1->setJurusan("Teknologi Informasi"); 


echo "<h2>EVALUASI IMPLEMENTASI INHERITANCE (TURUNAN)</h2>";
echo "<h3>[ Profil Identitas Mahasiswa ]</h3>";

// Menampilkan data menggunakan fungsi Getter sesuai contoh modul
echo "• Nama Mahasiswa : " . $mhs1->getNama() . "<br>";
echo "• Nomor NIM      : " . $mhs1->getNim() . "<br>";
echo "• Program Studi  : " . $mhs1->getJurusan() . "<br>";
echo "• Ruang Kelas    : Class " . $mhs1->getKelas() . "<br>";

?>