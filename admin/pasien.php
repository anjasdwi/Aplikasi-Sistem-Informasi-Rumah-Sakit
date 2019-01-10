<link href="style.css" type="text/css" rel="stylesheet" />
<h2> Data Pasien </h2>

<table width="700" border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td>
<form action="" method="post" class="search">
Search : <input name="search" type="text" />
<input type="submit" name="klik" value="Cari" />
</form>
</td>
<td width="200" align="right">
<a href="main.php?page=new_pasien.php" class="operasi">New</a>
</td>
</tr>
</table>

<table width="700" border="0" class="isidata" align="center">
  <tr>
    <td colspan="3" align="center" height="50" class="isi">
    <?php
    if (isset($_POST['klik']))
	{
		$search=$_POST['search'];
    echo 'Data Dokter dengan Pencarian Nama : ';
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
    <td  height="30" align="center" class="judul">Nama</td>
    <td width="200" height="30" align="center" class="judul">Tanggal Lahir</td>
    <td width="200" height="30" align="center" class="judul">Action</td>
  	</tr>
	<?php
	if (isset($_POST['klik']))
	{
		$search=$_POST['search'];
		$sql = "SELECT * FROM  `pasien` WHERE `pasien`.`nm_pasien` = '$search' LIMIT 0 , 30";
	}
	else
	{
		$sql = "SELECT * FROM  `pasien` LIMIT 0 , 30";
	}
	/*Dua SQL*/
  	include('koneksi.php');
 	$query= mysql_query($sql);
 	while ($data=mysql_fetch_array($query))
 	{
  	?>
  	<tr>
    <td align="center"><?php echo $data['nm_pasien']; ?></td>
    <td align="center"><?php echo $data['tgl_lhr']; ?></td>
    <td align="center">
    	<table width="100" border="0">
  		<tr>
    	<td><a href="main.php?page=view_pasien.php&no_pasien=<?php echo $data['no_pasien']; ?>">View</a></td>
    	<td><a href="main.php?page=edit_pasien.php&no_pasien=<?php echo $data['no_pasien']; ?>&nama=<?php echo $data['nm_pasien']; ?>&jenkel=<?php echo $data['j_kel']; ?>&agama=<?php echo $data['agama']; ?>&alamat=<?php echo $data['alamat']; ?>&tl=<?php echo $data['tgl_lhr']; ?>&usia=<?php echo $data['usia']; ?>&no_telp=<?php echo $data['no_telp']; ?>&nm_kk=<?php echo $data['nm_kk']; ?>&hub=<?php echo $data['hub_kel']; ?>">edit</a></td>
    	<td> <a href="main.php?page=delete_pasien.php&no_pasien=<?php echo $data['no_pasien']; ?>">Delete</a> </td>
  		</tr>
		</table>
    </td>
  </tr>
    <?php
 }
	?>
    <tr class="judul">
    <td height="20" colspan="3">
    </td>
    </tr>
</table>
