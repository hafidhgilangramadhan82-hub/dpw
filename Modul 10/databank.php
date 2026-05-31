<?php

require_once('kelas/akunBank.php');

$data1 = new akunBank("001", 10000);
$data1->setNama("Andi Pratama");

$data2 = new akunBank("002", 10000); 
$data2->setNama("Budi Santoso");


echo "<h2>REKAPITULASI TRANSAKSI DAN MUTASI AKUN BANK</h2>";
echo "========================================================<br>";

// SIMULASI TRANSAKSI AKUN 1 ($data1)
echo "<h3>[ Informasi Akun 1 ]</h3>";
echo "• No. Rekening : " . $data1->getAccountNumber() . "<br>";
echo "• Pemilik Akun : " . $data1->getNama() . "<br>";
echo "• Saldo Awal   : Rp " . number_format($data1->tampilkanJumlahUang(), 0, ',', '.') . ",-<br>";

// Proses Mutasi Dana Akun 1
$data1->tambahUang(15000);  
$data1->kurangiUang(5000);   

echo "• Saldo Akhir  : <strong>Rp " . number_format($data1->tampilkanJumlahUang(), 0, ',', '.') . ",-</strong><br>";
echo "• Beban Pajak  : Rp " . number_format($data1->hitungPajak(), 0, ',', '.') . ",-<br>";

echo "<br><hr><br>";

// SIMULASI TRANSAKSI AKUN 2 ($data2)
echo "<h3>[ Informasi Akun 2 ]</h3>";
echo "• No. Rekening : " . $data2->getAccountNumber() . "<br>";
echo "• Pemilik Akun : " . $data2->getNama() . "<br>";
echo "• Saldo Awal   : Rp " . number_format($data2->tampilkanJumlahUang(), 0, ',', '.') . ",-<br>";

// Proses Mutasi Dana Akun 2
$data2->tambahUang(100000); 
$data2->kurangiUang(20000);  

echo "• Saldo Akhir  : <strong>Rp " . number_format($data2->tampilkanJumlahUang(), 0, ',', '.') . ",-</strong><br>";
echo "• Beban Pajak  : Rp " . number_format($data2->hitungPajak(), 0, ',', '.') . ",-<br>";
?>