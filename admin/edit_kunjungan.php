<?php
	$tgl= $_GET['tgl'];
	$no_pasien= $_GET['no_pasien'];
	$kd_poli= $_GET['kd_poli'];
	$jam= $_GET['jam_kunjungan'];
?>
<link href="style.css" type="text/css" rel="stylesheet" />
<h2 class="input" align="center"> Input Data Kunjungan</h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center">
  <tr>
    <td width="150">Tanggal</td>
    <td width="10">:</td>
    <td>
    <input type="date" value="<?php echo $tgl ?>" name="tgl" />
    </td>
  </tr>
  <tr>
    <td>No Pasien</td>
    <td>:</td>
    <td><input type="text" name="no_pasien" value="<?php echo $no_pasien ?>" /></td>
  </tr>
  <tr>
    <td>kode Poliklinik</td>
    <td>:</td>
    <td><input type="text" name="kd_poli" value="<?php echo $kd_poli ?>" /></td>
  </tr>
  <tr>
    <td width="150">jam</td>
    <td width="10">:</td>
    <td>
    <input type="time" name="jam" value="<?php echo $jam ?>" />
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
      <input type="submit" value="save" name="klik" />
      <input type="hidden" name="tgl_lama" value="<?php echo $kd_dokter; ?>" />
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
	$tgllama= $_POST['tgllama'];
	$tgl= $_POST['tgl'];
	$no_pasien= $_POST['no_pasien'];
	$kd_poli= $_POST['kd_poli'];
	$jam= $_POST['jam'];
	$sql="UPDATE  `rekam_medis`.`kunjungan` SET  `tgl_kunjungan` =  '$tgl',
`kd_poli` =  '$kd_poli',
`jam_kunjungan` =  '$jam' WHERE  `kunjungan`.`tgl_kunjungan` =  '$tgllama' LIMIT 1 ;";
$query =mysql_query($sql);

if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=kunjungan.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=new_kunjungan.php'</script>";
	}
}
?>
