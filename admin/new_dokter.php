<link href="style.css" type="text/css" rel="stylesheet" />
<h2 class="input" align="center"> Input Data Dokter </h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center">
  <tr>
    <td width="150">Kode Dokter</td>
    <td width="10">:</td>
    <td>
    <input type="text" name="kd_dokter" />
    </td>
  </tr>
  <tr>
    <td>Nama Dokter</td>
    <td>:</td>
    <td><input type="text" name="nm_dokter" /></td>
  </tr>
  <tr>
    <td>Kode Pliklinik </td>
    <td>:</td>
    <?php
	include ('koneksi.php');
	$kd_poli='';
	$result=mysql_query('SELECT kd_poli FROM poliklinik');
	$kd_poli.='<select name="kd_poliklinik">';
	while ($row=mysql_fetch_array($result))
	{
		$kd_poli .="<option>" .$row['kd_poli']."</option>";
	}
	$kd_poli .='</select>';
	?>
    <td>
    <?php echo $kd_poli ?></td>
    </tr>
  <tr>
    <td>Tanggal Kunjungan</td>
    <td>:</td>
    <td><input type="date" name="tgl_kunjungan" /></td>
  </tr>
  <tr>
    <td>Kode User</td>
    <td>:</td>
    <td><input type="text" name="kd_user" /></td>
  </tr>
  <tr>
    <td>SIP</td>
    <td>:</td>
    <td>
    <select name="sip">
    <option value="Siang">08.00 s.d 16.00</option>
    <option value="Malem">17.00 s.d 10.00</option>
    <option value="Pagi">11.00 s.d 03.00</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input type="text" name="tempat_lahir" /></td>
  </tr>
  <tr>
    <td>No. Telp</td>
    <td>:</td>
    <td><input type="text" name="no_telp" /></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td>
    <textarea name="alamat"></textarea>
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
	$kd_dokter= $_POST['kd_dokter'];
	$nm_dokter= $_POST['nm_dokter'];
	$kd_poli= $_POST['kd_poliklinik'];
	$tgl_kunjungan= $_POST['tgl_kunjungan'];
	$kd_user= $_POST['kd_user'];
	$sip= $_POST['sip'];
	$tempat_lahir= $_POST['tempat_lahir'];
	$no_telp= $_POST['no_telp'];
	$alamat= $_POST['alamat'];
	$sql="INSERT INTO  `rekam_medis`.`dokter` (
`kd_dokter` ,
`kd_poli` ,
`tgl_kunjungan` ,
`kd_user` ,
`nm_dokter` ,
`SIP` ,
`tmpt_lahir` ,
`no_telp` ,
`alamat`
)
VALUES (
'$kd_dokter',  '$kd_poli',  '$tgl_kunjungan',  '$kd_user', '$nm_dokter', '$sip',  '$tempat_lahir', '$no_telp',  '$alamat'
)";
$query =mysql_query($sql);

if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=dokter.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=new_dokter.php'</script>";
	}
}
?>
