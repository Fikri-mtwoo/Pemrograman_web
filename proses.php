<?php
include "koneksi.php";
 if(isset($_POST['simpan'])){
    $nis        = $_POST['nis'];
    $nama       = $_POST['nama'];
    $hp         = $_POST['hp'];
    $jk         = $_POST['jk'];
    $alamat     = $_POST['alamat'];
    $hobi       = $_POST['hobi'];
    $kelas      = $_POST['kelas'];

    // foreach ($hobi as $h) {
    //    echo $h."|";
    // }
    // echo json_encode($hobi);
    // echo "<div class='tampil'> <span> Nis = $nis";
    // echo "Nama = $nama";
    // echo "No Hp = $hp";
    // echo "Jenis Kelaim = $jk";
    // echo "Alamat = $alamat";
    // echo "Hobi =".$kotak_hobi;
    // echo "Kelas = $kelas </span> </div>";
    $h = json_encode($hobi);
    $sql = mysqli_query($koneksi,"INSERT INTO siswa VALUES ('$nis','$nama','$hp','$jk','$h','$kelas','$alamat')");
    if($sql){
        header("location:home.php?page=tampil_siswa");    }
}else if(isset($_POST['edit'])){
    $nis        = $_POST['nis'];
    $nama       = $_POST['nama'];
    $hp         = $_POST['hp'];
    $jk         = $_POST['jk'];
    $alamat     = $_POST['alamat'];
    $hobi       = $_POST['hobi'];
    $kelas      = $_POST['kelas'];
    $h = json_encode($hobi);
    $sql = mysqli_query($koneksi,"UPDATE siswa SET nama='$nama', hp='$hp', jk='$jk', hobi='$h', kelas='$kelas', alamat='$alamat' WHERE nis='$nis'");
    if($sql){
        header("location:home.php?page=tampil_siswa");    }

}
?>