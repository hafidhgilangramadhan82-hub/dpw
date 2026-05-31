<?php
include 'koneksi.php';

if (isset($_GET['kodeMK'])) {
    $id = $_GET["kodeMK"];
    $query = "SELECT * FROM t_matakuliah WHERE kodeMK='$id'";
    $result = mysqli_query($link, $query);
    
    if(!$result){
        die ("Query Error: ".mysqli_errno($link)." - ".mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);
    $kodeMK = $data["kodeMK"];
    $namaMK = $data["namaMK"];
    $sks    = $data["sks"];
    $jam    = $data["jam"];
} else {
    header("location:viewmatakuliah.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        h1 { text-align: center; }
        .container { width: 400px; margin: auto; }
    </style>
</head>
<body>
    <h1>Edit Data Mata Kuliah</h1>
    <div class="container">
        <form action="proses_editmatakuliah.php" method="post">
            <fieldset>
                <legend>Edit Data Mata Kuliah</legend>
                <p>
                    <label for="kodeMK">Kode MK : </label>
                    <input type="hidden" name="kodeMK" value="<?php echo $kodeMK; ?>">
                    <input type="text" value="<?php echo $kodeMK; ?>" disabled >
                </p>
                <p>
                    <label for="namaMK">Nama MK : </label>
                    <input type="text" name="namaMK" id="namaMK" value="<?php echo $namaMK; ?>">
                </p>
                <p>
                    <label for="sks">SKS : </label>
                    <input type="number" name="sks" id="sks" value="<?php echo $sks; ?>">
                </p>
                <p>
                    <label for="jam">Jam : </label>
                    <input type="number" name="jam" id="jam" value="<?php echo $jam; ?>">
                </p>
            </fieldset>
            <p><input type="submit" name="edit" value="Update Data"></p>
        </form>
    </div>
</body>
</html>