<link href="style.css" type="text/css" rel="stylesheet" />
<h2 class="input" align="center"> Input Data Pasien </h2>
<form action="" method="post">
<table width="500" border="0" class="form" align="center">
  <tr>
    <td width="150">No Pasien</td>
    <td width="10">:</td>
    <td>
    <input type="text" name="no" />
    </td>
  </tr>
  <tr>
    <td>Nama Pasien</td>
    <td>:</td>
    <td><input type="text" name="nama" /></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>
    <select name="jenkel">
    <option value="">----pilih kelamin----</option>
    <option value="L">Laki-laki</option>
    <option value="P">Perempuan</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>Agama</td>
    <td>:</td>
    <td><input type="text" name="agama" /></td>
  </tr>
  <tr>
    <td>alamat</td>
    <td>:</td>
    <td><textarea name="alamat"></textarea></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td>
     <input type="date" name="tgl_lahir" />
    </td>
  </tr>
  <tr>
    <td>Usia</td>
    <td>:</td>
    <td><input type="text" name="usia" />Tahun</td>
  </tr>
  <tr>
    <td>No. Telp</td>
    <td>:</td>
    <td><input type="text" name="no_telp" /></td>
  </tr>
  <tr>
    <td>Nomor KK</td>
    <td>:</td>
    <td><input type="text" name="no_kk" /></td>
  </tr>
  <tr>
    <td>hubungan Keluarga</td>
    <td>:</td>
    <td><input type="text" name="hub" /></td>
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
	$no_pasien= $_POST['no'];
	$nama= $_POST['nama'];
	$jenkel= $_POST['jenkel'];
	$agama= $_POST['agama'];
	$alamat= $_POST['alamat'];
	$tgl_lahir= $_POST['tgl_lahir'];
	$usia= $_POST['usia'];
	$no_telp= $_POST['no_telp'];
	$no_kk= $_POST['no_kk'];
	$hub= $_POST['hub'];
	$sql="
	INSERT INTO  `rekam_medis`.`pasien` (
`no_pasien` ,
`nm_pasien` ,
`j_kel` ,
`agama` ,
`alamat` ,
`tgl_lhr` ,
`usia` ,
`no_telp` ,
`nm_kk` ,
`hub_kel`
)
VALUES (
'$no_pasien',  '$nama',  '$jenkel',  '$agama',  '$alamat',  '$tgl_lahir',  '$usia',  '$no_telp',  '$no_kk',  '$hub'
);";
$query =mysql_query($sql);

if ($query) {
	echo "<script>alert('Berhasil'); 
	document.location='main.php?page=pasien.php'</script>";
}
else 
{
	echo "<script>alert('Gagal'); 
	document.location='main.php?page=new_pasien.php'</script>";
	}}
?>
