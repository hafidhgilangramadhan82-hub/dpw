<?php

$host  = "localhost";
$user  = "root";      
$paswd = "";          
$name  = "db_akademik"; // Nama database

// aktivasi koneksi ke database
$link = mysqli_connect($host, $user, $paswd, $name);

// memeriksa koneksi
if (!$link) {
    die("Koneksi dengan database gagal: " . mysqli_connect_errno() . 
        " - " . mysqli_connect_error());
}
?>