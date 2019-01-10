<?php
$kd_poli=$_GET['kd_poli'];
include('koneksi.php');
$sql="DELETE FROM poliklinik WHERE kd_poli = '$kd_poli'";
$query =mysql_query($sql);
if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=poliklinik.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=poliklinik.php'</script>";
	}
?>