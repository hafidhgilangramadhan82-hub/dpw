<?php
include("koneksi.php");

if (isset($_GET["kodeMK"])) {
    $kodeMK = $_GET["kodeMK"];

    if (class_exists('Database')) {
        $db = new Database();
        $con = $db->getConnection();
    } elseif (isset($koneksi) && $koneksi instanceof mysqli) {
        $con = $koneksi;
    } else {
        die("Koneksi database tidak tersedia.");
    }

    $stmt = $con->prepare("DELETE FROM t_matakuliah WHERE kodeMK = ?");
    $stmt->bind_param("s", $kodeMK);

    if (!$stmt->execute()) {
        die("Gagal menghapus data: " . $stmt->error);
    }

    $stmt->close();
    $con->close();
}

header("Location: viewmatakuliah.php?msg=Data mata kuliah berhasil dihapus!");
exit;
?>