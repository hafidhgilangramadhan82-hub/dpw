<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload file</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <p><label>Pilih Gambar yang akan di upload: </label><br>
        <input type="file" name="gambar" id="gambar1"></p>
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <hr>
    <?php
    if (isset($_POST["submit"])) {
        $target_dir = "gambar/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if($check !== false) {
            echo "File berupa citra/gambar - " . $check["mime"] . ".<br>";
        } else {
            echo "File bukan gambar.<br>";
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.<br>";
            $uploadOk = 0;
        }

        if ($_FILES["gambar"]["size"] > 500000) {
            echo "Sorry, file anda terlalu besar.<br>";
            $uploadOk = 0;
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, hanya file JPG, JPEG, PNG & GIF.<br>";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, File anda gagal upload.<br>";
        } else {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "file " . htmlspecialchars(basename($_FILES["gambar"]["name"])). " berhasil Upload.";
            } else {
                echo "Sorry, Ada eror saat upload.<br>";
            }
        }
    }
    ?>
</body>
</html>