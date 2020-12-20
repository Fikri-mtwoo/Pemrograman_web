<?php
    $koneksi = mysqli_connect('localhost','root','','dbsekolah');
    if(!$koneksi){
        echo "Koneksi ke database gagal";
    }
?>