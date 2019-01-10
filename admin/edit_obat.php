<link href="style.css" type="text/css" rel="stylesheet" />
<?php
	$kd_obat= $_GET['kd_obat'];
	$nama= $_GET['nama'];
	$jumlah= $_GET['jumlah'];
	$ukuran= $_GET['ukuran'];
	$harga= $_GET['harga'];
?>
<h2 align="center"> Data Obat </h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center">
  <tr>
    <td width="150">Kode  Obat</td>
    <td width="10">:</td>
    <td>
    <input type="text" name="kd_obat" value='<?php echo $kd_obat ; ?>' />
    </td>
  </tr>
  <tr>
    <td>Nama Obat</td>
    <td>:</td>
    <td><input type="text" name="nama" value='<?php echo $nama ; ?>' /></td>
  </tr>
  <tr>
    <td>Jumlah</td>
    <td>:</td>
    <td>
    <input type="text" name="jumlah" value='<?php echo $jumlah ; ?>' />
    </td>
  </tr>
  <tr>
    <td>Ukuran</td>
    <td>:</td>
    <td><input type="text" name="ukuran" value='<?php echo $ukuran ; ?>' /></td>
  </tr>
  <tr>
    <td>harga</td>
    <td>:</td>
    <td>
     <input type="text" name="harga" value='<?php echo $harga ; ?>' />
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
      <input type="submit" value="Save" name="klik" />
      <input type="hidden" name="kd_obatlama" value='<?php echo $kd_obat ; ?>' />
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
	$kd_obatlama= $_POST['kd_obatlama'];
	$kd_obat= $_POST['kd_obat'];
	$nama= $_POST['nama'];
	$jumlah= $_POST['jumlah'];
	$ukuran= $_POST['ukuran'];
	$harga= $_POST['harga'];
	$sql="UPDATE  `rekam_medis`.`obat` SET  `kd_obat` =  '$kd_obat',
`nm_obat` =  '$nama',
`jml_obat` =  '$jumlah',
`ukuran` =  '$ukuran',
`harga` =  '$harga' WHERE  `obat`.`kd_obat` =  '$kd_obatlama';";
$query =mysql_query($sql);

if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=obat.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=obat.php'</script>";
	}
}
?>
