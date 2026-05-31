<?php

// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

// mengecek apakah tombol edit dari form telah diklik
if (isset($_POST['edit'])) {
    
    // membuat variabel untuk menampung data dari form
    $idDosen   = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    // jalankan query UPDATE berdasarkan idDosen yang dikirim
    $query  = "UPDATE t_dosen SET namaDosen = '$namaDosen', noHP = '$noHP' WHERE idDosen = '$idDosen'";
    $result = mysqli_query($link, $query);

    // mengecek apakah ada error ketika menjalankan query
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($link).
            " - ".mysqli_error($link));
    }
}

// melakukan redirect (mengalihkan) ke halaman viewdosen.php
header("location:viewdosen.php");
?>