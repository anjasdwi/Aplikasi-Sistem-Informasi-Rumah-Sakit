<link href="style.css" type="text/css" rel="stylesheet" />
<h2 align="center"> Input Data Poliklinik </h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center">
  <tr>
    <td width="150">Kode Poliklinik</td>
    <td width="10">:</td>
    <td>
    <input type="text" name="kd_poli" />
    </td>
  </tr>
  <tr>
    <td>Nama Poliklinik</td>
    <td>:</td>
    <td><input type="text" name="nama" /></td>
  </tr>
  <tr>
    <td>Lantai</td>
    <td>:</td>
    <td>
    <input type="text" name="lantai" />
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
      <input type="submit" name="klik" />
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
	$kd_poli= $_POST['kd_poli'];
	$nama= $_POST['nama'];
	$lantai= $_POST['lantai'];
	$sql="INSERT INTO  `rekam_medis`.`poliklinik` (
`kd_poli` ,
`nm_poli` ,
`lantai`
)
VALUES (
'$kd_poli',  '$nama',  '$lantai'
);";
$query =mysql_query($sql);

if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=poliklinik.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=poliklinik.php'</script>";
	}
}
?>
