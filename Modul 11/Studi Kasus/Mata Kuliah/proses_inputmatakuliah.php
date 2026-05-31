<?php
include 'koneksi.php';

if (isset($_POST['input'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = $_POST['sks'];
    $jam    = $_POST['jam'];

    // Menyimpan ke tabel t_matakuliah
    $query  = "INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES ('$kodeMK', '$namaMK', '$sks', '$jam')";
    $result = mysqli_query($link, $query);

    if(!$result){
        die ("Query Error: ".mysqli_errno($link)." - ".mysqli_error($link));
    }
}
header("location:viewmatakuliah.php");
?>