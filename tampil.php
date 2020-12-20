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
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".$data['nis']."</td>";
                    echo "<td>".$data['nama']."</td>";
                    echo "<td>".$data['hp']."</td>";
                    echo "<td>".$data['jk']."</td>";
                    echo "<td>".$data['hobi']."</td>";
                    echo "<td>".$data['kelas']."</td>";
                    echo "<td>".$data['alamat']."</td>";
                    echo "<td><a href=''>Edit</a></td>";
                    ?>
                    <td><a href="hapus.php?nis=<?=$data['nis']?>" onclick="return confirm('yakin dihapus?')">Hapus</a></td>
                    <?php
                    echo "</tr>";
                }
            }
        ?>
    </tbody>
</table>