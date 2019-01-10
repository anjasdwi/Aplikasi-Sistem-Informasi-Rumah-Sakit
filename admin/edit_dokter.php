<link href="style.css" type="text/css" rel="stylesheet" />
<?php
	$kd_dokter= $_GET['kd_dokter'];
	$nm_dokter= $_GET['nm_dokter'];
	$kd_poli= $_GET['kd_poli'];
	$kd_user= $_GET['kd_user'];
	$sip= $_GET['sip'];
	$tempat_lahir= $_GET['tempat_lahir'];
	$no_telp= $_GET['no_telp'];
	$alamat= $_GET['alamat'];
?>
<h2 class="input" align="center"> Data Dokter </h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center">
  <tr>
    <td width="150">Kode Dokter</td>
    <td width="40">:</td>
    <td>
    <input type="text" name="kd_dokter" value="<?php echo $kd_dokter; ?>" />
    </td>
  </tr>
  <tr>
    <td>Nama Dokter</td>
    <td>:</td>
    <td><input type="text" name="nm_dokter" value="<?php echo $nm_dokter; ?>" /></td>
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
    <td>Kode User</td>
    <td>:</td>
    <td><input type="text" name="kd_user" value="<?php echo $kd_user; ?>" /></td>
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
    <td><input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" /></td>
  </tr>
  <tr>
    <td>No. Telp</td>
    <td>:</td>
    <td><input type="text" name="no_telp" value="<?php echo $no_telp; ?>" /></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td>
    <textarea name="alamat"><?php echo $alamat; ?></textarea>
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
    <input type="submit" name="klik" />
    <input type="hidden" name="kd_dokterlama" value="<?php echo $kd_dokter; ?>" />
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
	$kd_dokterlama= $_POST['kd_dokterlama'];
	$kd_dokter= $_POST['kd_dokter'];
	$nm_dokter= $_POST['nm_dokter'];
	$kd_poli= $_POST['kd_poliklinik'];
	$kd_user= $_POST['kd_user'];
	$sip= $_POST['sip'];
	$tempat_lahir= $_POST['tempat_lahir'];
	$no_telp= $_POST['no_telp'];
	$alamat= $_POST['alamat'];
	$sql="UPDATE  `rekam_medis`.`dokter` SET  `kd_dokter` =  '$kd_dokter',
`kd_poli` =  '$kd_poli',
`kd_user` =  '$kd_user',
`nm_dokter` =  '$nm_dokter',
`SIP` =  '$sip',
`tmpt_lahir` =  '$tempat_lahir',
`no_telp` =  '$no_telp',
`alamat` =  '$alamat' WHERE  `dokter`.`kd_dokter` = '$kd_dokterlama'  LIMIT 1 ;
";
$query =mysql_query($sql);

if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=view_dokter.php&kd_dokter=$kd_dokter'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=new_poliklinik.php'</script>";
	}
}
?>
