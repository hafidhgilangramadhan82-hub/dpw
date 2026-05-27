<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galeri Gambar</title>
    <style>
        .grid-galeri { display: flex; flex-wrap: wrap; gap: 15px; }
        .item-foto { border: 1px solid #ccc; padding: 6px; border-radius: 4px; text-align: center; }
        .item-foto img { width: 160px; height: 120px; object-fit: cover; display: block; margin-bottom: 5px; }
        .caption { font-size: 11px; font-family: monospace; }
    </style>
</head>
<body>
    <h2>Galeri Berkas Server</h2>
    <div class="grid-galeri">
        <?php
        $filelist = glob('gambar/*');
        foreach ($filelist as $filename) {
            if (is_file($filename)) {
                echo "<div class='item-foto'>";
                echo "  <img src='".$filename."'>";
                echo "  <span class='caption'>".basename($filename)."</span>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>