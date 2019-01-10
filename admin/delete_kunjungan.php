<?php
$tgl_kunjungan=$_GET['tgl_kunjungan'];
include('koneksi.php');
$sql="DELETE FROM kunjungan WHERE tgl_kunjungan = '$tgl_kunjungan'";
$query =mysql_query($sql);
if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=kunjungan.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=kunjungan.php'</script>";
	}
?>