<?php
$kd_lab=$_GET['kd_lab'];
include('koneksi.php');
$sql="DELETE FROM laboratorium WHERE kd_lab = '$kd_lab'";
$query =mysql_query($sql);
if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=hasil_lab.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=hasil_lab.php'</script>";
	}
?>