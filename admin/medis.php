<link href="style.css" type="text/css" rel="stylesheet" />
<h2> Data Rekam Medis</h2>

<table width="700" border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td>
<form action="" method="post" class="search">
Search : <input name="search" type="date" />
<input type="submit" name="klik" value="Cari" />
</form>
</td>
<td width="200" align="right">
<a href="main.php?page=new_rm.php" class="operasi">New</a>
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
    echo 'Data Rekam Medis per-tanggal : ';
	echo $search;
	}
	else
	{
		echo "Data Medis";
	}
    ?>
    
    </td>
  </tr>
  <tr>
    <td  height="30" width="100" align="center" class="judul">No RM</td>
    <td  height="30" width="150" align="center" class="judul">Tanggal</td>
    <td height="30" align="center" class="judul">Diagnosa</td>
    <td width="180" height="30" align="center" class="judul">Action</td>
  	</tr>
	<?php
	if (isset($_POST['klik']))
	{
		$search=$_POST['search'];
		$sql = "SELECT * FROM  `rekam_medis` WHERE `rekam_medis`.`tgl_pemeriksaan` = '$search' LIMIT 0 , 30";
	}
	else
	{
		$sql = "SELECT * FROM  `rekam_medis` LIMIT 0 , 30";
	}
	/*Dua SQL*/
  	include('koneksi.php');
 	$query= mysql_query($sql);
 	while ($data=mysql_fetch_array($query))
 	{
  	?>
  	<tr>
    <td align="center"><?php echo $data['no_RM']; ?></td>
    <td height="30" align="center"><?php echo $data['tgl_pemeriksaan']; ?></td>
    <td align="center"><?php echo $data['diagnosa']; ?></td>
    <td align="center">
    	<table width="100" border="0">
  		<tr>
    	<td><a href="main.php?page=view_rm.php&rm=<?php echo $data['no_RM']; ?>">View</a></td>
    	<td><a href="main.php?page=edit_rm.php&no_rm=<?php echo $data['no_RM']; ?>&kd_tindakan=<?php echo $data['kd_tindakan']; ?>&kd_obat=<?php echo $data['kd_obat']; ?>&kd_user=<?php echo $data['kd_user']; ?>&no_pasien=<?php echo $data['no_pasien']; ?>&diagnosa=<?php echo $data['diagnosa']; ?>&resep=<?php echo $data['resep']; ?>&keluhan=<?php echo $data['keluhan']; ?>&tgl_pemeriksaan=<?php echo $data['tgl_pemeriksaan']; ?>&ket=<?php echo $data['ket']; ?>">edit</a></td>
    	<td> <a href="main.php?page=delete_rm.php&no_rm=<?php echo $data['no_RM']; ?>">Delete</a> </td>
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
