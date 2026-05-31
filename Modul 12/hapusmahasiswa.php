<?php
  include("koneksi.php");

if (isset($_GET["npm"])) {
    $npm = $_GET["npm"];
    $con = null;

    if (class_exists("Database")) {
        $dbClass = "Database";
        $db = new $dbClass();
        if (method_exists($db, "getConnection")) {
            $con = $db->getConnection();
        }
    }

    if (!$con && function_exists("koneksi")) {
        $con = koneksi();
    }

    if (!$con && isset($conn) && $conn instanceof mysqli) {
        $con = $conn;
    }

    if (!$con && defined('DB_HOST') && defined('DB_USER') && defined('DB_PASS') && defined('DB_NAME')) {
        $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    if (!$con) {
        die("Koneksi database tidak tersedia.");
    }

    $stmt = $con->prepare("DELETE FROM t_mahasiswa WHERE npm = ?");
    if (!$stmt) {
        die("Gagal menyiapkan query: " . $con->error);
    }

    $stmt->bind_param("s", $npm);

    if (!$stmt->execute()) {
        die("Gagal menghapus data: " . $stmt->error);
    }

    $stmt->close();
    $con->close();
}

header("Location: viewmahasiswa.php?msg=Data mahasiswa berhasil dihapus!");
exit;
?>