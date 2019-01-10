<?php
$kd_tindakan=$_GET['kd_tindakan'];
include('koneksi.php');
$sql="DELETE FROM tindakan WHERE kd_tindakan = '$kd_tindakan'";
$query =mysql_query($sql);
if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=tindakan.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=tindakan.php'</script>";
	}
?>