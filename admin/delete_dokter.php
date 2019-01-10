<?php
$kd_dokter=$_GET['kd_dokter'];
include('koneksi.php');
$sql="DELETE FROM dokter WHERE kd_dokter = '$kd_dokter'";
$query =mysql_query($sql);
if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=dokter.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=dokter.php'</script>";
	}
?>