<?php
    include "koneksi.php";
    $id = $_GET['nis'];
    $sql = mysqli_query($koneksi,"delete from siswa where nis='$id'");
    if($sql){
        header("location:tampil.php");
    }
?>