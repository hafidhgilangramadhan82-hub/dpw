<?php
$data_kelas = [
    ["nama" => "Hafidh Gilang", "umur" => 19],
    ["nama" => "Habibi Zakly", "umur" => 20],
    ["nama" => "Syafi' Arkhan", "umur" => 19],
    ["nama" => "Naufal Gavin", "umur" => 20],
    ["nama" => "Haris Ridho", "umur" => 21],
    ["nama" => "Fikri Haikal", "umur" => 19],
    ["nama" => "Aditya Pratama", "umur" => 20],
    ["nama" => "Rizky Ramadhan", "umur" => 19],
    ["nama" => "Dewi Anggraini", "umur" => 19],
    ["nama" => "Siti Nurhaliza", "umur" => 20],
    ["nama" => "Bagas Saputra", "umur" => 21],
    ["nama" => "Wahyu Utomo", "umur" => 19],
    ["nama" => "Dian Lestari", "umur" => 20],
    ["nama" => "Anisa Fitri", "umur" => 19],
    ["nama" => "Dimas Wijaya", "umur" => 22]
];

$output_json = json_encode($data_kelas, JSON_PRETTY_PRINT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data JSON</title>
</head>
<body style="background-color: #222; color: #a6e22e; padding: 20px;">
    <h3 style="font-family: sans-serif; color: white;">Output Format Teks JSON:</h3>
    <pre style="font-size: 14px; font-family: monospace; background: #333; padding: 15px; border-radius: 4px;"><?php echo $output_json; ?></pre>
</body>
</html>