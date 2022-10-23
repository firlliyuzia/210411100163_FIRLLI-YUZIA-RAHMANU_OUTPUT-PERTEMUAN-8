<?php
$koneksi=mysqli_connect("localhost","root","","db_163");
$sql="SELECT id_firlli, nama_firlli, alamat_firlli FROM tbl_firlli";
$hasil = mysqli_query($koneksi,$sql)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data CRUD</title>
</head>
<body>
<p>Nama : Firlli Yuzia Rahmanu <br>
NIM     : 210411100163 <br>
Kelas   : PAW C <br>
</p>
<a href="tambah_firlli.php">Tambah</a>
    <table border="1" width="30%" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $id_firlli=0;
            while ($baris=mysqli_fetch_assoc($hasil)){
        
            ?>
            <tr>
                <td><?php $id_firlli = $id_firlli+1; echo $id_firlli; ?> </td>
                <td><?php echo $baris['nama_firlli'];?></td>
                <td><?php echo $baris['alamat_firlli'];?> </td>
                <td>
                    <a href="edit_firlli.php?id=<?php echo $baris['id_firlli'];?>" class="btn btn-info">Edit</a>
                    <a href="delete_firlli.php?id=<?=$baris['id_firlli']?>" onclick="return confirm('apakah anda yakin menghapus <?php echo $baris['nama_firlli']?> dari data?')" >Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>


</div>
    
</body>
</html>