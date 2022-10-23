<?php 
$koneksi=mysqli_connect("localhost","root","","db_163");
$id_firlli=$_POST['id_firlli'];
$nama_firlli=$_POST['nama_firlli'];
$alamat_firlli=$_POST['alamat_firlli'];
$sql="UPDATE tbl_firlli SET nama_firlli='$nama_firlli',alamat_firlli='$alamat_firlli' where id_firlli=$id_firlli";
$hasil=mysqli_query($koneksi,$sql);
if ($hasil) {
	echo "Eksekusi update data berhasil <br>";
	echo "<a href ='tampilan_firlli.php'>Show Data</a>";
}else{
	echo "Eksekusi update data gagal";
}
?>
