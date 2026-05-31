<?php include 

'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table { width: 900px; margin: auto; }
        h1 { text-align: center; }
    </style>
</head>

<a href="../../index.php">⬅️ Kembali ke Dashboard Utama</a>

<body>
    <h1>Tabel Mahasiswa</h1>
    <center><a href="input_mahasiswa.php">Input Data Mahasiswa</a></center>
    <br/>
    <table border="1 text-align:center">
        <tr>
            <th>NPM</th>
            <th>Nama Mahasiswa</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>No HP</th>
        </tr>
        <?php
        $query = "SELECT * FROM t_mahasiswa ORDER BY npm ASC";
        $result = mysqli_query($link, $query);

        if(!$result){
            die ("Query Error: ".mysqli_errno($link)." - ".mysqli_error($link));
        }

        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>$data[npm]</td>";
            echo "<td>$data[namaMhs]</td>";
            echo "<td>$data[prodi]</td>";
            echo "<td>$data[alamat]</td>";
            echo "<td>$data[noHP]</td>";
            echo "<td>
                <a href='editmahasiswa.php?npm=".$data['npm']."'>Edit</a> / 
                <a href='hapusmahasiswa.php?npm=".$data['npm']."' onclick=\"return confirm('Yakin hapus data?')\">Hapus</a>
            </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>