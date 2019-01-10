<link href="style.css" type="text/css" rel="stylesheet" />
<h2 class="input" align="center"> Input Data Medis </h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center">
  <tr>
    <td width="150">No Rekam Medis</td>
    <td width="10">:</td>
    <td>
    <input type="text" name="no" />
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
    <td>Keluhan</td>
    <td>:</td>
    <td>
   <textarea name="keluhan"></textarea>
    </td>
  </tr>
  <tr>
    <td>Tanggal Pemeriksaan</td>
    <td>:</td>
    <td><input type="date" name="tgl_pemeriksaan" /></td>
  </tr>
  <tr>
  <tr>
    <td>Daignosa</td>
    <td>:</td>
    <td><input type="text" name="diagnosa" /></td>
  </tr>
  <tr>
    <td>Tindakan</td>
    <td>:</td>
    <?php
	include ('koneksi.php');
	$nm_tindakan='';
	$result=mysql_query('SELECT kd_tindakan, nm_tindakan FROM tindakan');
	$nm_tindakan.='<select name="kd_tindakan">';
	while ($row=mysql_fetch_array($result))
	{
		$nm_tindakan.="<option value='$row[kd_tindakan]'>" .$row['nm_tindakan']."</option>";
	}
	$nm_tindakan.='</select>';
	?>
    <td><?php echo $nm_tindakan ?></td>
  </tr>
  <tr>
    <td>Resep</td>
    <td>:</td>
    <td>
     <input type="text" name="resep" />
    </td>
  </tr>
  <tr>
    <td>Obat</td>
    <td>:</td>
     <?php
	include ('koneksi.php');
	$nm_obat='';
	$result=mysql_query('SELECT kd_obat, nm_obat FROM obat');
	$nm_obat.='<select name="kd_obat">';
	while ($row=mysql_fetch_array($result))
	{
		$nm_obat.="<option value='$row[kd_obat]'>" .$row['nm_obat']."</option>";
	}
	$nm_obat.='</select>';
	?>
    <td><?php echo $nm_obat ?></td>
  </tr>
  <tr>
    <td>Kode User</td>
    <td>:</td>
    <td><input type="text" name="kd_user" /></td>
  </tr>
  <tr>
    <td>Ket</td>
    <td>:</td>
    <td><textarea name="ket"></textarea></td>
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
	$no_rm= $_POST['no'];
	$kd_tindakan= $_POST['kd_tindakan'];
	$kd_obat= $_POST['kd_obat'];
	$kd_user= $_POST['kd_user'];
	$no_pasien= $_POST['no_pasien'];
	$diagnosa= $_POST['diagnosa'];
	$resep= $_POST['resep'];
	$keluhan= $_POST['keluhan'];
	$tgl_pemeriksaan= $_POST['tgl_pemeriksaan'];
	$ket= $_POST['ket'];
	$sql="INSERT INTO  `rekam_medis`.`rekam_medis` (
`no_RM` ,
`kd_tindakan` ,
`kd_obat` ,
`kd_user` ,
`no_pasien` ,
`diagnosa` ,
`resep` ,
`keluhan` ,
`tgl_pemeriksaan` ,
`ket_rm`
)
VALUES (
'$no_rm',  '$kd_tindakan',  '$kd_obat',  '$kd_user',  '$no_pasien',  '$diagnosa',  '$resep',  '$keluhan',  '$tgl_pemeriksaan',  '$ket'
);";
$query =mysql_query($sql);

if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=medis.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=new_rm.php'</script>";
	}
}
?>
