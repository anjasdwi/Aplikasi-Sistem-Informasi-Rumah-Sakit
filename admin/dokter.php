<link href="style.css" type="text/css" rel="stylesheet" />
<h2> Data Dokter </h2>

<table width="700" border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td>
<form action="" method="post" class="search">
Search : <input name="search" type="text" />
<input type="submit" name="klik" value="Cari" />
</form>
</td>
<td width="200" align="right">
<a href="main.php?page=new_dokter.php" class="operasi">New</a>
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
    echo 'Data Dokter dengan Pencarian : ';
	echo $search;
	}
	else
	{
		echo "Data Dokter";
	}
    ?>
    
    </td>
  </tr>
  <tr>
    <td width="120" height="30" align="center" class="judul">Kode</td>
    <td  height="30" align="center" class="judul">Nama</td>
    <td width="120" height="30" align="center" class="judul">SIP</td>
    <td width="200" height="30" align="center" class="judul">Action</td>
  	</tr>
	<?php
	if (isset($_POST['klik']))
	{
		$search=$_POST['search'];
		$sql = "SELECT DISTINCT kd_dokter, nm_dokter, kd_poli, kd_user, tmpt_lahir, no_telp, SIP, alamat WHERE `dokter`.`kd_dokter` = '$search' OR `dokter`.`nm_dokter` = '$search' LIMIT 0 , 30";
	}
	else
	{
		$sql = "SELECT DISTINCT kd_dokter, nm_dokter, kd_poli, kd_user, tmpt_lahir, no_telp, SIP, alamat  FROM  `dokter` LIMIT 0 , 30";
	}
	/*Dua SQL*/
  	include('koneksi.php');
 	$query= mysql_query($sql);
 	while ($data=mysql_fetch_array($query))
 	{
  	?>
  	<tr>
    <td align="center"><?php echo $data['kd_dokter']; ?></td>
    <td align="center"><?php echo $data['nm_dokter']; ?></td>
    <td align="center"><?php echo $data['SIP']; ?></td>
    <td align="center">
    	<table width="100" border="0">
  		<tr>
    	<td><a href="main.php?page=view_dokter.php&kd_dokter=<?php echo $data['kd_dokter']; ?>">View</a></td>
    	<td><a href="main.php?page=edit_dokter.php&kd_dokter=<?php echo $data['kd_dokter']; ?>&kd_poli=<?php echo $data['kd_poli']; ?>&kd_user=<?php echo $data['kd_user']; ?>&nm_dokter=<?php echo $data['nm_dokter']; ?>&sip=<?php echo $data['SIP']; ?>&tempat_lahir=<?php echo $data['tmpt_lahir']; ?>&no_telp=<?php echo $data['no_telp']; ?>&alamat=<?php echo $data['alamat']; ?>">edit</a></td>
    	<td> <a href="main.php?page=delete_dokter.php&kd_dokter=<?php echo $data['kd_dokter']; ?>">Delete</a> </td>
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
