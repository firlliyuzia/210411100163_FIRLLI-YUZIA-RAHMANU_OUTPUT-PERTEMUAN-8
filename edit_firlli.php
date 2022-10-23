<?php 
    $Koneksi =  mysqli_connect('localhost', 'root', '', 'db_163');
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_firlli WHERE id_firlli = $id";
    $hasil = mysqli_query($Koneksi, $query);
    if (!$hasil) {
        echo "Gagal";
    }
    $baris = mysqli_fetch_array($hasil);
?>

<h3>Form Edit Data</h3>

<form action="update_firlli.php" method="post">
<input type="hidden" name="id_firlli" value="<?php echo $baris['id_firlli']?>">
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>
            <input type="text" id="nama_firlli" name="nama_firlli" value="<?php echo $baris['nama_firlli']?>">
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>
            <input type="text" id="alamat_firlli" name="alamat_firlli" value="<?php echo $baris['alamat_firlli']?>">
        </td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Kirim"></td>
    </tr>
</table>
</form>