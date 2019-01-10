<link href="style.css" type="text/css" rel="stylesheet" />
<h2> Data Kunjungan </h2>

<table width="700" border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td>
<form action="" method="post" class="search">
Search : <input name="search" type="text" />
<input type="submit" name="klik" value="Cari" />
</form>
</td>
<td width="200" align="right">
<a href="main.php?page=pilihdokter.php" class="operasi">New</a>
</td>
</tr>
</table>

<table width="700" border="0" class="isidata" align="center">
  <tr>
    <td colspan="4" align="center" height="50" class="isi">
    <?php
    if (isset($_POST['klik']))
	{
	$search=$_POST['search'];
    echo 'Data Kunjungan dengan Pencarian : ';
	echo $search;
	}
	else
	{
		echo "Data Kunjungan";
	}
    ?>
    
    </td>
  </tr>
  <tr>
    <td width="120" height="30" align="center" class="judul">Tanggal</td>
    <td  height="30" align="center" class="judul">Pasien</td>
    <td width="120" height="30" align="center" class="judul">Poliklinik</td>
    <td width="200" height="30" align="center" class="judul">Action</td>
  	</tr>
	<?php
	if (isset($_POST['klik']))
	{
		$search=$_POST['search'];
		$sql = "SELECT * FROM  `kunjungan` INNER JOIN `pasien` INNER JOIN `dokter` INNER JOIN `poliklinik` WHERE `kunjungan`.`tgl_kunjungan` = '$search' OR `pasien`.`nm_pasien` = '$search' LIMIT 0 , 30";
	}
	else
	{
		$sql = "SELECT * FROM `kunjungan` INNER JOIN `pasien` INNER JOIN `dokter` INNER JOIN `poliklinik` WHERE kunjungan.tgl_kunjungan=dokter.tgl_kunjungan AND kunjungan.no_pasien=pasien.no_pasien AND kunjungan.kd_poli=poliklinik.kd_poli LIMIT 0 , 30";
	}
	/*Dua SQL*/
  	include('koneksi.php');
 	$query= mysql_query($sql);
 	while ($data=mysql_fetch_array($query))
 	{
  	?>
  	<tr>
    <td align="center"><?php echo $data['tgl_kunjungan']; ?></td>
    <td align="center"><?php echo $data['nm_pasien']; ?></td>
    <td align="center"><?php echo $data['nm_poli']; ?></td>
    <td align="center">
    	<table width="150" border="0">
  		<tr>
    	<td><a href="main.php?page=view_kunjungan.php&tgl_kunjungan=<?php echo $data['tgl_kunjungan']; ?>"> <img src="images/view.png">View</a></td>
    	<td><a href="main.php?page=edit_kunjungan.php&tgl=<?php echo $data['tgl_kunjungan']; ?>&no_pasien=<?php echo $data['no_pasien']; ?>&kd_poli=<?php echo $data['kd_poli']; ?>&jam_kunjungan=<?php echo $data['jam_kunjungan']; ?>">edit</a></td>
    	<td> <a href="main.php?page=delete_kunjungan.php&tgl_kunjungan=<?php echo $data['tgl_kunjungan']; ?>">Delete</a> </td>
  		</tr>
		</table>
    </td>
  </tr>
    <?php
 }
	?>
    <tr class="judul">
    <td height="20" colspan="4">
    </td>
    </tr>
</table>
