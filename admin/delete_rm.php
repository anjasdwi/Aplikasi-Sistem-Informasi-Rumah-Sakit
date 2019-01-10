<?php
$no_rm=$_GET['no_rm'];
include('koneksi.php');
$sql="DELETE FROM rekam_medis WHERE no_RM = '$no_rm'";
$query =mysql_query($sql);
if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=medis.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=medis.php'</script>";
	}
?>