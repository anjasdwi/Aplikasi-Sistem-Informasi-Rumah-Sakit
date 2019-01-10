<link href="style.css" type="text/css" rel="stylesheet" />
<?php
	$no_pasien= $_GET['no_pasien'];
	$nama= $_GET['nama'];
	$jenkel= $_GET['jenkel'];
	$agama= $_GET['agama'];
	$alamat= $_GET['alamat'];
	$tgl_lahir= $_GET['tl'];
	$usia= $_GET['usia'];
	$no_telp= $_GET['no_telp'];
	$nm_kk= $_GET['nm_kk'];
	$hub= $_GET['hub'];
?>
<h2 class="input" align="center"> Data Pasien </h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center">
  <tr>
    <td width="150">No Pasien</td>
    <td width="40">:</td>
    <td>
    <input type="text" name="no" value="<?php echo $no_pasien; ?>" />
    </td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" value="<?php echo $nama; ?>" /></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>
    <select name="jenkel">
    <option selected="selected">-- Jenis Kelamin -- </option>
    <option <?php 
	if($jenkel=="L")
	{
		echo "selected=selected";
	}
	
	 ?> value="L">Laki-laki</option>
    
    <option <?php
	if ($jenkel=="P")
	{
		echo "selected=selected";
	}
	 ?> value="P">Perempuan</option>
     
    </select>
   </td>
  </tr>
  <tr>
    <td>Agama</td>
    <td>:</td>
    <td><input type="text" name="agama" value="<?php echo $agama; ?>" /></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><textarea name="alamat"><?php echo $alamat; ?></textarea></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" /></td>
  </tr>
  <tr>
    <td>Usia</td>
    <td>:</td>
    <td><input type="text" name="usia" value="<?php echo $usia; ?>" /></td>
  </tr>
  <tr>
    <td>No Telp</td>
    <td>:</td>
    <td>
    <input type="text" name="no_telp" value="<?php echo $no_telp; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Nama Kepala Keluarga</td>
    <td>:</td>
    <td>
    <input type="text" name="nm_kk" value="<?php echo $nm_kk; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Hubungan Keluarga</td>
    <td>:</td>
    <td>
    <input type="text" name="hub" value="<?php echo $hub; ?>"/>
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
    <input type="submit" name="klik" />
    <input type="hidden" name="no_pasienlama" value="<?php echo $no_pasien; ?>" />
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
	$no_pasienlama= $_POST['no_pasienlama'];
	$no_pasien= $_POST['no_pasien'];
	$nama= $_POST['nama'];
	$jenkel= $_POST['jenkel'];
	$agama= $_POST['agama'];
	$alamat= $_POST['alamat'];
	$tgl_lahir= $_POST['tgl_lahir'];
	$usia= $_POST['usia'];
	$no_telp= $_POST['no_telp'];
	$nm_kk= $_POST['nm_kk'];
	$hub= $_POST['hub'];
	$sql="UPDATE  `rekam_medis`.`pasien` SET  `no_pasien` =  '$no_pasien',
`nm_pasien` =  '$nama',
`j_kel` =  '$jenkel',
`agama` =  '$agama',
`alamat` =  '$alamat',
`tgl_lhr` =  '$tgl_lahir',
`usia` =  '$usia',
`no_telp` =  '$no_telp',
`nm_kk` =  '$nm_kk',
`hub_kel` =  '$hub' WHERE  `pasien`.`no_pasien` =  '$no_pasienlama' LIMIT 1 ;";
$query =mysql_query($sql);

if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=pasien.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=edit_pasien.php'</script>";
	}
}
?>
