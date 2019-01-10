<?
session_start();
?>
<link href="style.css" type="text/css" rel="stylesheet" />
<h2 class="input" align="center"> Input Data Kunjungan</h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center">
  <tr>
    <td width="150">Tanggal</td>
    <td width="10">:</td>
    <td>
    <input type="date" name="tgl" />
    </td>
  </tr>
  <tr>
    <td>No Pasien</td>
    <td>:</td>
    <?php
	include ('koneksi.php');
	$no_pasien='';
	$result=mysql_query('SELECT no_pasien FROM pasien');
	$no_pasien.='<select name="no_pasien">';
	while ($row=mysql_fetch_array($result))
	{
		$no_pasien .="<option>" .$row['no_pasien']."</option>";
	}
	$no_pasien .='</select>';
	?>
    <td><?php echo $no_pasien ?></td>
  </tr>
  <tr>
    <td>kode Poliklinik</td>
    <td>:</td>
    <?php
	include ('koneksi.php');
	$kd_poli='';
	$result=mysql_query('SELECT kd_poli FROM poliklinik');
	$kd_poli.='<select name="kd_poli">';
	while ($row=mysql_fetch_array($result))
	{
		$kd_poli .="<option>" .$row['kd_poli']."</option>";
	}
	$kd_poli .='</select>';
	?>
    <td><?php echo $kd_poli ?></td>
  </tr>
  <tr>
    <td width="150">jam</td>
    <td width="10">:</td>
    <td>
    <input type="time" name="jam" />
    </td>
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
	$tgl= $_POST['tgl'];
	$no_pasien= $_POST['no_pasien'];
	$kd_poli= $_POST['kd_poli'];
	$jam= $_POST['jam'];
	$sql="INSERT INTO  `rekam_medis`.`kunjungan` (
`tgl_kunjungan` ,
`no_pasien` ,
`kd_poli` ,
`jam_kunjungan`
)
VALUES (
'$tgl',  '$no_pasien',  '$kd_poli',  '$jam'
);";
$query =mysql_query($sql);

if ($query) {
	$_SESSION['tgl_kunjungan']= $tgl;
	$_SESSION['kd_poli']= $kd_poli;
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=dokterexe.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=new_kunjungan.php'</script>";
	}
}
?>
