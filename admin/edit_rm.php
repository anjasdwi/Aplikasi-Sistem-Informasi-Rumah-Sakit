<link href="style.css" type="text/css" rel="stylesheet" />
<?php
	$no_rm= $_GET['no_rm'];
	$kd_tindakan= $_GET['kd_tindakan'];
	$kd_obat= $_GET['kd_obat'];
	$kd_user= $_GET['kd_user'];
	$no_pasien= $_GET['no_pasien'];
	$diagnosa= $_GET['diagnosa'];
	$resep= $_GET['resep'];
	$keluhan= $_GET['keluhan'];
	$tgl_pemeriksaan= $_GET['tgl_pemeriksaan'];
	$ket= $_GET['ket'];
?>
<h2 class="input" align="center"> Data Medis</h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="200">No Rekam Medis</td>
    <td width="30">:</td>
    <td>
    <input type="text" name="no" value="<?php echo $no_rm; ?>" />
    </td>
  </tr>
  <tr>
    <td>No Pasien</td>
    <td>:</td>
    <td><input type="text" name="no_pasien" value="<?php echo $no_pasien; ?>" /></td>
  </tr>
  <tr>
    <td>Keluhan</td>
    <td>:</td>
    <td>
    <textarea name="ket"><?php echo $keluhan; ?></textarea>
    </td>
  </tr>
  <tr>
    <td>Tanggal Pemeriksaan</td>
    <td>:</td>
    <td><input type="date" name="tgl_pemeriksaan" value="<?php echo $tgl_pemeriksaan; ?>" /></td>
  </tr>
  <tr>
  <tr>
    <td>Daignosa</td>
    <td>:</td>
    <td><input type="text" name="diagnosa" value="<?php echo $diagnosa; ?>" /></td>
  </tr>
  <tr>
    <td>Kode Tindakan</td>
    <td>:</td>
    <td><input type="text" name="kd_tindakan" value="<?php echo $kd_tindakan; ?>" /></td>
  </tr>
  <tr>
    <td>Resep</td>
    <td>:</td>
    <td>
     <input type="text" name="resep" value="<?php echo $resep; ?>" />
    </td>
  </tr>
  <tr>
    <td>Kode Obat</td>
    <td>:</td>
    <td><input type="text" name="kd_obat" value="<?php echo $kd_obat; ?>" /></td>
  </tr>
  <tr>
    <td>Kode User</td>
    <td>:</td>
    <td><input type="text" name="kd_user" value="<?php echo $kd_user; ?>" /></td>
  </tr>
  <tr>
    <td>Ket</td>
    <td>:</td>
    <td><textarea name="ket"><?php echo $ket; ?></textarea></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
    <input type="submit" value="save" name="klik" />
    </td>
  </tr>
</table>
</form>
</body>
</html>
<?php
include('koneksi.php');
if (isset($_POST['klik']))
{
	$kd_dokterlama= $_POST['kd_dokterlama'];
	$kd_dokter= $_POST['kd_dokter'];
	$nm_dokter= $_POST['nm_dokter'];
	$kd_poli= $_POST['kd_poliklinik'];
	$kd_user= $_POST['kd_user'];
	$sip= $_POST['sip'];
	$tempat_lahir= $_POST['tempat_lahir'];
	$no_telp= $_POST['no_telp'];
	$alamat= $_POST['alamat'];
	$sql="UPDATE  `rekam_medis`.`dokter` SET  `kd_dokter` =  '$kd_dokter',
`kd_poli` =  '$kd_poli',
`kd_user` =  '$kd_user',
`nm_dokter` =  '$nm_dokter',
`SIP` =  '$sip',
`tmpt_lahir` =  '$tempat_lahir',
`no_telp` =  '$no_telp',
`alamat` =  '$alamat' WHERE  `dokter`.`kd_dokter` = '$kd_dokterlama'  LIMIT 1 ;
";
$query =mysql_query($sql);

if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=view_medis.php&rm= $no_RM; ?>'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=edit_rm.php'</script>";
	}
}
?>
