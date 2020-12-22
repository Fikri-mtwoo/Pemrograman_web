<?php
include "koneksi.php";
$id = $_GET['nis'];
$sql = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$id'");
$data = mysqli_fetch_array($sql);
$data_hobi = json_decode($data['hobi']);
?>
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
                    <input type="text" id="nis" name="nis" readonly value="<?=$data['nis']?>">
                <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" value="<?=$data['nama']?>">
                <label for="hp">No. Hp:</label>
                    <input type="text" id="hp" name="hp" value="<?=$data['hp']?>">
                <label for="jk">Jenis Kelamin:</label>
                    <input type="radio" name="jk" id="jk" value="Laki - laki" <?php if($data['jk'] == 'Laki - laki'){ echo "checked";} ?>><label class="light">Laki - Laki</label>
                    <input type="radio" name="jk" id="jk" value="Perempuan" <?php if($data['jk'] == 'Perempuan'){ echo "checked";} ?>><label class="light">Perempuan</label>
            </div>
            <div class="item-3">
                <label for="hobi">Hobi:</label>
                    <input type="checkbox" name="hobi[]" id="hobi" value="Desain" <?php if(in_array("Desain",$data_hobi)) echo "checked"?>><label class="light">Desain</label><br>
                    <input type="checkbox" name="hobi[]" id="hobi" value="Jaringan" <?php if(in_array("Jaringan",$data_hobi)) echo "checked"?>><label class="light">Jaringan</label><br>
                    <input type="checkbox" name="hobi[]" id="hobi" value="Pemrograman" <?php if(in_array("Pemrograman",$data_hobi)) echo "checked"?>><label class="light">Pemrograman</label><br>
                <label for="kelas">Kelas:</label>
                    <select name="kelas" id="kelas">
                        <?php $kelas = ['IPA','IPS'];
                            foreach ($kelas as $k) {
                                if($data['kelas'] == $k){
                                    $select = "selected";
                                }else{
                                    $select = "";
                                }
                                
                                echo "<option $select>".$k."</option>";
                            }
                        ?>
                    </select>
                <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" ><?=$data['alamat']?></textarea>
            </div>
            <div class="item-4">
                <button type="submit" class="button" name="edit">Simpan</button>
                <button type="reset" class="button">Reset</button>
            </div>
        </div>
    </form>

</body>
</html>