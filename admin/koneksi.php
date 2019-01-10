<?php
$koneksi=mysqli_connect('localhost','root','');
$db=mysqli_select_db($koneksi,'rekam_medis'); 
if ($koneksi){
	if ($db) 
	{
	}
	else
	{
		echo "Database Belum ada";
	}
}
else 
{
	echo "Gagal";
	
}
?>