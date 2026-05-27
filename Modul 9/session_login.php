<?php
session_start();
$_SESSION['user_aktif'] = "Admin Utama";
header("Location: cookies.php");
exit();
?>