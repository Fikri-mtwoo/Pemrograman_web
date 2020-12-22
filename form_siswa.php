<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
    <form action="proses.php" method="post">
        <div class="container">
            <div class="item-1">
                <h1>Daftar</h1>
            </div>
            <div class="item-2">
                <label for="nis">NIS:</label>
                    <input type="text" id="nis" name="nis">
                <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama">
                <label for="hp">No. Hp:</label>
                    <input type="text" id="hp" name="hp">
                <label for="jk">Jenis Kelamin:</label>
                    <input type="radio" name="jk" id="jk" value="Laki - laki"><label class="light">Laki - Laki</label>
                    <input type="radio" name="jk" id="jk" value="Perempuan"><label class="light">Perempuan</label>
            </div>
            <div class="item-3">
                <label for="hobi">Hobi:</label>
                    <input type="checkbox" name="hobi[]" id="hobi" value="Desain"><label class="light">Desain</label><br>
                    <input type="checkbox" name="hobi[]" id="hobi" value="Jaringan"><label class="light">Jaringan</label><br>
                    <input type="checkbox" name="hobi[]" id="hobi" value="Pemrograman"><label class="light">Pemrograman</label><br>
                <label for="kelas">Kelas:</label>
                    <select name="kelas" id="kelas">
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                    </select>
                <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat"></textarea>
            </div>
            <div class="item-4">
                <button type="submit" class="button" name="simpan">Simpan</button>
                <button type="reset" class="button">Reset</button>
            </div>
        </div>
    </form>

</body>
</html>