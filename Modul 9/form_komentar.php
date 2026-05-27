<?php
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $email = $comment = "";
$tampilkan_hasil = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = bersihkan_input($_POST["name"]);
    $email = bersihkan_input($_POST["email"]);
    $comment = bersihkan_input($_POST["comment"]);
    $tampilkan_hasil = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Komentar</title>
</head>
<body>
    <h2>Form Komentar Pengunjung</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="name" required><br><br>
        E-mail: <input type="email" name="email" required><br><br>
        Komentar: <textarea name="comment" rows="5" cols="40" required></textarea><br><br>
        <input type="submit" value="Simpan">
    </form>

    <?php if ($tampilkan_hasil): ?>
        <hr>
        <h4>Hasil Output Komentar:</h4>
        Nama : <?php echo $name; ?><br>
        Email : <?php echo $email; ?><br>
        Komentar : <?php echo $comment; ?><br>
    <?php endif; ?>
</body>
</html>