<?php
// memanggil file koneksi.php untuk memperoleh koneksi ke database
include 'koneksi.php';

// mengecek apakah variabel $_GET['idDosen'] ada pada URL
if (isset($_GET['idDosen'])) {
    
    // memperoleh nilai idDosen dari URL
    $id = $_GET["idDosen"];

    // menjalankan query DELETE untuk menghapus data berdasarkan idDosen
    $query = "DELETE FROM t_dosen WHERE idDosen='$id'";
    $result = mysqli_query($link, $query);

    // mengecek apakah query gagal dijalankan
    if(!$result) {
        die ("Gagal menghapus data: ".mysqli_errno($link).
            " - ".mysqli_error($link));
    }
}

// melakukan redirect kembali ke halaman viewdosen.php
header("location:viewdosen.php");
?>