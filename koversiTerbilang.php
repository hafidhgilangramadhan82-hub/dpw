<?php

// Tugas 9: Konversi Angka 1-9 Menjadi Huruf Menggunakan Switch
$input_angka = 5;
$terbilang = ""; 

switch ($input_angka) {
    case 1:
        $terbilang = "satu";
        break;
    case 2:
        $terbilang = "dua";
        break;
    case 3:
        $terbilang = "tiga";
        break;
    case 4:
        $terbilang = "empat";
        break;
    case 5:
        $terbilang = "lima";
        break;
    case 6:
        $terbilang = "enam";
        break;
    case 7:
        $terbilang = "tujuh";
        break;
    case 8:
        $terbilang = "delapan";
        break;
    case 9:
        $terbilang = "sembilan";
        break;
    default:
        $terbilang = "Angka tidak dikenal (Masukkan 1-9)";
        break;
}

// Menampilkan output hasil konversi 
echo "<h2>Program Konversi Terbilang</h2>";
echo "-----------------------------------<br>";
echo "Input Angka : $input_angka <br>";
echo "Terbilang   : <strong>$terbilang</strong> <br>";
echo "-----------------------------------<br>";
?>