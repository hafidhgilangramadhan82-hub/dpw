<?php
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nameErr = $passwordErr = $globalErr = "";
$u = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if (empty($_POST["u"])) {
            $nameErr = "masukkan username";
        } else {
            $u = bersihkan_input($_POST["u"]);
        }

        if (empty($_POST["p"])) {
            $passwordErr = "masukkan password";
        }

        if (!empty($u) && !empty($_POST["p"])) {
            header("Location: session_login.php");
            exit();
        } else {
            throw new Exception("Username dan Password tidak boleh kosong!");
        }
    } catch (Exception $e) {
        $globalErr = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .error { color: #dc3545; font-size: 11px; font-weight: bold; }
    </style>
</head>
<body>
    <h2>Sistem Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="u" value="<?php echo $u; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error">* <?php echo $passwordErr; ?></span>
        <br><br>
        <input type="submit" value="Login">
        <br><br>
        <?php if(!empty($globalErr)): ?>
            <span class="error">⚠️ <?php echo $globalErr; ?></span>
        <?php endif; ?>
    </form>
</body>
</html>