<a href="home.php?page=form_siswa">Tambah</a>
<table border="1">
    <thead>
        <td>No</td>
        <td>NIS</td>
        <td>Nama</td>
        <td>No.Hp</td>
        <td>Jenis Kelamin</td>
        <td>Hobi</td>
        <td>Kelas</td>
        <td>Alamat</td>
        <td colspan="2">Action</td>
    </thead>
    <tbody>
        <?php
            $no=1;
            include "koneksi.php";
            $sql = mysqli_query($koneksi,"select * from siswa");
            $jml = mysqli_num_rows($sql);
            if($jml == 0 ){
                echo "<td colspan='10'>Data Kosong</td>";
            }else{
                while ($data = mysqli_fetch_array($sql)) {
                    $hobi = json_decode($data['hobi']);
                    ?>
                    <tr>
                    <td><?=$no++?></td>
                    <td><?=$data['nis']?></td>
                    <td><?=$data['nama']?></td>
                    <td><?=$data['hp']?></td>
                    <td><?=$data['jk']?></td>
                    <td><?php foreach ($hobi as $h) {
                        echo $h."<br>"; 
                    }?></td>
                    <td><?=$data['kelas']?></td>
                    <td><?=$data['alamat']?></td>
                    <td><a href="home.php?page=edit_siswa&nis=<?=$data['nis']?>">Edit</a></td>
                    <td><a href="hapus.php?nis=<?=$data['nis']?>" onclick="return confirm('Siswa Bernama : <?=$data['nama']?>,yakin dihapus?')">Hapus</a></td>
                    <?php
                    echo "</tr>";
                }
            }
        ?>
    </tbody>
</table>