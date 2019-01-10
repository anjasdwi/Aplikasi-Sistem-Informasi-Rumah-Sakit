<link href="style.css" type="text/css" rel="stylesheet" />
<?php
	$kd_tindakan= $_GET['kd_tindakan'];
	$nama= $_GET['nama'];
	$ket= $_GET['ket'];
?>
<h2 align="center"> Edit Data Tindakan</h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center">
  <tr>
    <td width="150">Kode Tindakan </td>
    <td width="10">:</td>
    <td>
    <input type="text" name="kd_tindakan" value='<?php echo $kd_tindakan ; ?>' />
    </td>
  </tr>
  <tr>
    <td>Nama Tindakan</td>
    <td>:</td>
    <td><input type="text" name="nama" value='<?php echo $nama ; ?>' /></td>
  </tr>
  <tr>
    <td>Ket</td>
    <td>:</td>
    <td>
    <textarea name="ket"><?php echo $ket ; ?></textarea>
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
      <input type="submit" value="Save" name="klik" />
      <input type="hidden" name="kd_tindakanlama" value='<?php echo $kd_tindakan ; ?>' />
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
	$kd_tindakanlama= $_POST['kd_tindakanlama'];
	$kd_tindakan= $_POST['kd_tindakan'];
	$nama= $_POST['nama'];
	$ket= $_POST['ket'];
	$sql="UPDATE  `rekam_medis`.`tindakan` SET  `kd_tindakan` =  '$kd_tindakan', `nm_tindakan` =  '$nama',
	`ket` =  '$ket' WHERE  `tindakan`.`kd_tindakan` =  '$kd_tindakanlama'";
$query =mysql_query($sql);

if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=tindakan.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=tindakan.php'</script>";
	}
}
?>
