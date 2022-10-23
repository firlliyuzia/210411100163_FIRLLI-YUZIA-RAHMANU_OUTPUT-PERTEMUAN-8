<?php
$koneksi = mysqli_connect("localhost","root","","db_163");
$id=$_GET['id'];

$sql="DELETE from tbl_firlli where id_firlli=$id";
$hasil=mysqli_query($koneksi,$sql);

if(!$hasil){
    echo "<script>alert('Data GAGAL di delete');location.href='tampilan_firlli.php'</script>";
}else{
    echo "<script>alert('Data BERHASIL di delete');location.href='tampilan_firlli.php'</script>";
}
?>