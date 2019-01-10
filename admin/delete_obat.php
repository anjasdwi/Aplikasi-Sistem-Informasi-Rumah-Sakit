<?php
$kd_obat=$_GET['kd_obat'];
include('koneksi.php');
$sql="DELETE FROM obat WHERE kd_obat = '$kd_obat'";
$query =mysql_query($sql);
if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=obat.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=obat.php'</script>";
	}
?>