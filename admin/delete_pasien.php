<?php
$no_pasien=$_GET['no_pasien'];
include('koneksi.php');
$sql="DELETE FROM pasien WHERE no_pasien = '$no_pasien'";
$query =mysql_query($sql);
if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=pasien.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=pasien.php'</script>";
	}
?>