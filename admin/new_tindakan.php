<link href="style.css" type="text/css" rel="stylesheet" />
<h2 align="center"> Input Data Tindakan</h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center">
  <tr>
    <td width="150">Kode Tindakan </td>
    <td width="10">:</td>
    <td>
    <input type="text" name="kd_tindakan" />
    </td>
  </tr>
  <tr>
    <td>Nama Tindakan</td>
    <td>:</td>
    <td><input type="text" name="nama" /></td>
  </tr>
  <tr>
    <td>Ket</td>
    <td>:</td>
    <td>
    <textarea name="ket"></textarea>
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
      <input type="submit" value="Save" name="klik" />
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
	$kd_tindakan= $_POST['kd_tindakan'];
	$nama= $_POST['nama'];
	$ket= $_POST['ket'];
	$sql="INSERT INTO  `rekam_medis`.`tindakan` (
`kd_tindakan` ,
`nm_tindakan` ,
`ket`
)
VALUES (
'$kd_tindakan',  '$nama',  '$ket'
);

";
$query =mysql_query($sql);

if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=tindakan.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=new_tindakan.php'</script>";
	}
}
?>
