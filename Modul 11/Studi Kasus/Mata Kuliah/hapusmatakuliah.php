<?php
include 'koneksi.php';

if (isset($_GET['kodeMK'])) {
    $id = $_GET["kodeMK"];
    $query = "DELETE FROM t_matakuliah WHERE kodeMK='$id'";
    $result = mysqli_query($link, $query);

    if(!$result) {
        die ("Gagal menghapus data: ".mysqli_errno($link)." - ".mysqli_error($link));
    }
}
header("location:viewmatakuliah.php");
?>