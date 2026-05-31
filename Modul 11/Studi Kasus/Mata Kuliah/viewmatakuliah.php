<?php

include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 800px; margin: auto; }
        h1 { text-align: center; }
    </style>
</head>

<a href="../../index.php">⬅️ Kembali ke Dashboard Utama</a>

<body>
    <h1>Tabel Mata Kuliah</h1>
    <center><a href="input_matakuliah.php">Input Data Mata Kuliah</a></center>
    <br/>
    <table border="1">
        <tr>
            <th>Kode MK</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Jam</th>
            <th>Pilihan</th>
        </tr>
        <?php
        $query = "SELECT * FROM t_matakuliah ORDER BY kodeMK ASC";
        $result = mysqli_query($link, $query);

        if(!$result){
            die ("Query Error: ".mysqli_errno($link)." - ".mysqli_error($link));
        }

        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>$data[kodeMK]</td>";
            echo "<td>$data[namaMK]</td>";
            echo "<td>$data[sks]</td>";
            echo "<td>$data[jam]</td>";
            echo "<td>
                <a href='editmatakuliah.php?kodeMK=".$data['kodeMK']."'>Edit</a> / 
                <a href='hapusmatakuliah.php?kodeMK=".$data['kodeMK']."' onclick=\"return confirm('Yakin hapus data?')\">Hapus</a>
            </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>