<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Input Data Mata Kuliah</title>
    <style>
        h1 { text-align: center; }
        .container { width: 400px; margin: auto; }
    </style>
</head>
<body>
    <h1>Input Data</h1>
    <div class="container">
        <form id="form_matakuliah" action="proses_inputmatakuliah.php" method="post">
            <fieldset>
                <legend>Input Data Mata Kuliah</legend>
                <p>
                    <label for="kodeMK">Kode MK : </label>
                    <input type="number" name="kodeMK" id="kodeMK" required>
                </p>
                <p>
                    <label for="namaMK">Nama MK : </label>
                    <input type="text" name="namaMK" id="namaMK" required>
                </p>
                <p>
                    <label for="sks">SKS : </label>
                    <input type="number" name="sks" id="sks" required>
                </p>
                <p>
                    <label for="jam">Jam : </label>
                    <input type="number" name="jam" id="jam" required>
                </p>
            </fieldset>
            <p>
                <input type="submit" name="input" value="Simpan">
            </p>
        </form>
    </div>
</body>
</html>