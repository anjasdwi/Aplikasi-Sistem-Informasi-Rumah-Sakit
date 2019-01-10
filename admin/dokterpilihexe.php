<?php
session_start();
include ('koneksi.php');
$kd = $_POST['kd_dokter'];
$sql = "SELECT * FROM  `dokter`  WHERE dokter.kd_dokter='$kd'";
$query= mysql_query($sql);
	if ($data= mysql_fetch_array($query))
	{
	$_SESSION['kd_dokter']= $data['kd_dokter'];
	$_SESSION['nm_dokter']= $data['nm_dokter'];
	$_SESSION['SIP']= $data['SIP'];
	$_SESSION['tempat_lahir']= $data['tmpt_lahir'];
	$_SESSION['no_telp']= $data['no_telp'];
	$_SESSION['kd_user']= $data['kd_user'];
	$_SESSION['alamat']= $data['alamat'];
	echo "<script>alert('berhasil memilih!'); 
			document.location='main.php?page=new_kunjungan.php'</script>";
	}
	else
	{
		echo "<script>alert('gagal memilih!'); 
			document.location='main.php?page=kunjungan.php'</script>";
	}

?>