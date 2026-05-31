<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Input Data Mahasiswa</title>
    <style>
        h1 { text-align: center; }
        .container { width: 400px; margin: auto; }
    </style>
</head>
<body>
    <h1>Input Data</h1>
    <div class="container">
        <form id="form_mahasiswa" action="proses_inputmahasiswa.php" method="post">
            <fieldset>
                <legend>Input Data Mahasiswa</legend>
                <p>
                    <label for="npm">NPM : </label>
                    <input type="number" name="npm" id="npm" required>
                </p>
                <p>
                    <label for="namaMhs">Nama Mahasiswa : </label>
                    <input type="text" name="namaMhs" id="namaMhs" required>
                </p>
                <p>
                    <label for="prodi">Prodi : </label>
                    <input type="text" name="prodi" id="prodi" required>
                </p>
                <p>
                    <label for="alamat">Alamat : </label>
                    <input type="text" name="alamat" id="alamat" required>
                </p>
                <p>
                    <label for="noHP">No HP : </label>
                    <input type="text" name="noHP" id="noHP" required>
                </p>
            </fieldset>
            <p>
                <input type="submit" name="input" value="Simpan">
            </p>
        </form>
    </div>
</body>
</html>