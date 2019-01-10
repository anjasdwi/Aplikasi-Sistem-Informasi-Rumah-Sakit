<link href="style.css" type="text/css" rel="stylesheet" />
<h2 align="center"> Input Data Obat </h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center">
  <tr>
    <td width="150">Kode  Obat</td>
    <td width="10">:</td>
    <td>
    <input type="text" name="kd_obat" />
    </td>
  </tr>
  <tr>
    <td>Nama Obat</td>
    <td>:</td>
    <td><input type="text" name="nama" /></td>
  </tr>
  <tr>
    <td>Jumlah</td>
    <td>:</td>
    <td>
    <input type="text" name="jumlah" />
    </td>
  </tr>
  <tr>
    <td>Ukuran</td>
    <td>:</td>
    <td><input type="text" name="ukuran" /></td>
  </tr>
  <tr>
    <td>harga</td>
    <td>:</td>
    <td>
     <input type="text" name="harga" />
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
	$kd_obat= $_POST['kd_obat'];
	$nama= $_POST['nama'];
	$jumlah= $_POST['jumlah'];
	$ukuran= $_POST['ukuran'];
	$harga= $_POST['harga'];
	$sql="INSERT INTO  `rekam_medis`.`obat` (
`kd_obat` ,
`nm_obat` ,
`jml_obat` ,
`ukuran` ,
`harga`
)
VALUES (
'$kd_obat',  '$nama',  '$jumlah',  '$ukuran',  '$harga'
);";
$query =mysql_query($sql);

if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=obat.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=new_obat.php'</script>";
	}
}
?>
