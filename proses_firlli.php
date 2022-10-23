<?php 
$koneksi=mysqli_connect("localhost","root","","db_163");
$nama=$_POST['nama_firlli'];
$alamat=$_POST['alamat_firlli'];
$sql="INSERT INTO tbl_firlli value(null,'$nama','$alamat')";
$hasil=mysqli_query($koneksi,$sql);
if ($hasil) {
	header("location: tampilan_firlli.php");
}
?>
