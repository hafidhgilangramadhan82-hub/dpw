<?php
include 'koneksi.php';

if (isset($_GET['npm'])) {
    $id = $_GET["npm"];
    $query = "SELECT * FROM t_mahasiswa WHERE npm='$id'";
    $result = mysqli_query($link, $query);
    
    if(!$result){
        die ("Query Error: ".mysqli_errno($link)." - ".mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);
    $npm     = $data["npm"];
    $namaMhs = $data["namaMhs"];
    $prodi   = $data["prodi"];
    $alamat  = $data["alamat"];
    $noHP    = $data["noHP"];
} else {
    header("location:viewmahasiswa.php");
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
    <h1>Edit Data Mahasiswa</h1>
    <div class="container">
        <form action="proses_editmahasiswa.php" method="post">
            <fieldset>
                <legend>Edit Data Mahasiswa</legend>
                <p>
                    <label for="npm">NPM : </label>
                    <input type="hidden" name="npm" value="<?php echo $npm; ?>">
                    <input type="text" value="<?php echo $npm; ?>" disabled >
                </p>
                <p>
                    <label for="namaMhs">Nama Mahasiswa : </label>
                    <input type="text" name="namaMhs" id="namaMhs" value="<?php echo $namaMhs; ?>">
                </p>
                <p>
                    <label for="prodi">Prodi : </label>
                    <input type="text" name="prodi" id="prodi" value="<?php echo $prodi; ?>">
                </p>
                <p>
                    <label for="alamat">Alamat : </label>
                    <input type="text" name="alamat" id="alamat" value="<?php echo $alamat; ?>">
                </p>
                <p>
                    <label for="noHP">No HP : </label>
                    <input type="text" name="noHP" id="noHP" value="<?php echo $noHP; ?>">
                </p>
            </fieldset>
            <p><input type="submit" name="edit" value="Update Data"></p>
        </form>
    </div>
</body>
</html>