<?php
session_start();
	$kd_poli= $_SESSION['kd_poli'];
	$tgl_kunjungan= $_SESSION['tgl_kunjungan'];
	$kd_dokter= $_SESSION['kd_dokter'];
	$nm_dokter= $_SESSION['nm_dokter'];
	$kd_user= $_SESSION['kd_user'];
	$sip= $_SESSION['SIP'];
	$tempat_lahir= $_SESSION['tempat_lahir'];
	$no_telp= $_SESSION['no_telp'];
	$alamat= $_SESSION['alamat'];
	include('koneksi.php');
	$sql="INSERT INTO  `rekam_medis`.`dokter` (
`kd_dokter` ,
`kd_poli` ,
`tgl_kunjungan` ,
`kd_user` ,
`nm_dokter` ,
`SIP` ,
`tmpt_lahir` ,
`no_telp` ,
`alamat`
)
VALUES (
'$kd_dokter',  '$kd_poli',  '$tgl_kunjungan',  '$kd_user',  '$nm_dokter',  '$sip',  '$tempat_lahir',  '$no_telp',  '$alamat'
);";
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