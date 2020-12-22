<?php
    $page = isset($_REQUEST['page'])?$_REQUEST['page']:'';
    switch ($page) {
        case '':
            echo "<p>Selamat datang di websaite</p>
            <p>SEKOLAH KU</p>";
            break;
        case 'form_siswa':
            include "form_siswa.php";
            break;
        case 'tampil_siswa':
            include "tampil.php";
            break;
        case 'edit_siswa':
            include "edit.php";
            break;
        
        default:
            # code...
            break;
    }
?>