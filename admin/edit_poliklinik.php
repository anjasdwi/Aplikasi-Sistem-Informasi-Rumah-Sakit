<link href="style.css" type="text/css" rel="stylesheet" />
<?php
	$kd_poli= $_GET['kd_poli'];
	$nm_poli= $_GET['nm_poli'];
	$lantai= $_GET['lantai'];
?>
<h2 align="center"> Edit Data Tindakan</h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center">
  <tr>
    <td width="150">Kode Poliklinik</td>
    <td width="10">:</td>
    <td>
    <input type="text" name="kd_poli" value='<?php echo $kd_poli ; ?>' />
    </td>
  </tr>
  <tr>
    <td>Nama Poliklinik</td>
    <td>:</td>
    <td><input type="text" name="nama" value='<?php echo $nm_poli ; ?>' /></td>
  </tr>
  <tr>
    <td>Lantai</td>
    <td>:</td>
    <td>
    <input type="text" name="lantai" value='<?php echo $lantai ; ?>' />
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
      <input type="submit" value="Save" name="klik" />
      <input type="hidden" name="kd_polilama" value='<?php echo $kd_poli ; ?>' />
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
	$kd_polilama= $_POST['kd_polilama'];
	$kd_poli= $_POST['kd_poli'];
	$nm_poli= $_POST['nama'];
	$lantai= $_POST['lantai'];
	$sql="UPDATE  `rekam_medis`.`poliklinik` SET  `kd_poli` =  '$kd_poli',
`nm_poli` =  '$nm_poli',
`lantai` =  '1' WHERE  `poliklinik`.`kd_poli` =  '$kd_polilama';";
$query =mysql_query($sql);

if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=poliklinik.php&kd_poli=$kd_poli'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=new_poliklinik.php'</script>";
	}
}
?>
