<link href="style.css" type="text/css" rel="stylesheet" />
<?php
	$kd_lab= $_GET['kd_lab'];
	$no_RM= $_GET['no_RM'];
	$hasil= $_GET['hasil_lab'];
	$ket= $_GET['ket'];
?>
<h2 align="center"> Input Data Laboratorium</h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center">
  <tr>
    <td width="150">kode Lab</td>
    <td width="10">:</td>
    <td>
    <input type="text" name="kd_lab" value="<?php echo $kd_lab ?>" />
    </td>
  </tr>
  <tr>
    <td>No Rekam Medis</td>
    <td>:</td>
    <?php
	include ('koneksi.php');
	$no_RM='';
	$result=mysql_query('SELECT no_RM FROM rekam_medis');
	$no_RM.='<select name="no_RM">';
	while ($row=mysql_fetch_array($result))
	{
		$no_RM.="<option value='$row[no_RM]'>" .$row['no_RM']."</option>";
	}
	$no_RM.='</select>';
	?>
    <td><?php echo $no_RM ?></td>
  </tr>
  <tr>
    <td>Hasil</td>
    <td>:</td>
    <td>
    <input type="text" name="hasil" value="<?php echo $hasil ?>" />
    </td>
  </tr>
  <tr>
    <td>Ket</td>
    <td>:</td>
    <td>
    <textarea name="ket"><?php echo $ket ?></textarea>
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
      <input type="submit" value="Save" name="klik" />
      <input type="text" name="kd_lablama" value="<?php echo $kd_lab ?>" />
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
	$kd_lablama= $_POST['kd_lablama'];
	$kd_lab= $_POST['kd_lab'];
	$no= $_POST['no_RM'];
	$hasil= $_POST['hasil'];
	$ket= $_POST['ket'];
	$sql="UPDATE  `rekam_medis`.`laboratorium` SET  `kd_lab` =  '$kd_lab',
`hasil_lab` =  '$hasil',
`ket_lab` =  '$ket' WHERE  `laboratorium`.`kd_lab` =  '$kd_lablama' LIMIT 1 ;";
$query =mysql_query($sql);

if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=hasil_lab.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=hasil_lab.php'</script>";
	}
}
?>
