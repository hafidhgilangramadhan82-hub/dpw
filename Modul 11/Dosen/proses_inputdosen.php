<?php

// 1. Memanggil berkas koneksi database
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Data Dosen</title>
    <style>
        h1 {
            text-align: center;
        }
        table {
            width: 600px;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .tambah-data {
            display: block;
            width: 600px;
            margin: 10px auto;
            text-align: right;
        }
    </style>
</head>
<body>
    <h1>Daftar Data Dosen</h1>
    
    <div class="tambah-data">
        <a href="input.php">[+] Tambah Dosen Baru</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Dosen</th>
                <th>Nama Dosen</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
            $result = mysqli_query($link, $query);

            // Periksa jika query gagal eksekusi
            if(!$result){
                die("Query Error: ".mysqli_errno($link)." - ".mysqli_error($link));
            }

            $no = 1;
            while($data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>" . $data['idDosen'] . "</td>";
                echo "<td>" . $data['namaDosen'] . "</td>";
                echo "<td>" . $data['noHP'] . "</td>";
                echo "</tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>