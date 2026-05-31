<?php
  include("koneksi.php");

  if (isset($_GET["idDosen"])) {
      if (class_exists('Database')) {
        $db = new Database();
        $con = $db->getConnection();
    
      } else {
        if (isset($host, $user, $pass, $db)) {
          $con = new mysqli($host, $user, $pass, $db);
        } else {
          // try common constants
          if (defined('DB_HOST') && defined('DB_USER') && defined('DB_PASS') && defined('DB_NAME')) {
            $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
          } else {
            die('No database connection available.');
          }
        }
        if ($con->connect_error) {
          die('Connection failed: ' . $con->connect_error);
        }
      }

      $id = (int) $_GET["idDosen"];
    
      $stmt = $con->prepare("DELETE FROM t_dosen WHERE idDosen = ?");
      $stmt->bind_param("i", $id);

    if (!$stmt->execute()) {
        die("Gagal menghapus data: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }
  
  header("location:viewdosen.php?msg=Data dosen berhasil dihapus!");
?>