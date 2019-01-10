<link href="style.css" type="text/css" rel="stylesheet" />
<h2> Data Obat </h2>

<table width="700" border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td>
<form action="" method="post" class="search">
Search : <input name="search" type="text" />
<input type="submit" name="klik" value="Cari" />
</form>
</td>
<td width="200" align="right">
<a href="main.php?page=new_obat.php" class="operasi">New</a>
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
		echo $search;
	}
	else
	{
		echo "Data Obat";
	}
    ?>
    
    </td>
  </tr>
  <tr>
    <td  height="30" align="center" class="judul">Kode Obat</td>
    <td width="200" height="30" align="center" class="judul">Nama Obat</td>
    <td width="200" height="30" align="center" class="judul">Action</td>
  	</tr>
	<?php
	if (isset($_POST['klik']))
	{
		$search=$_POST['search'];
		$sql = "SELECT * FROM  `obat` WHERE `obat`.`nm_obat` = '$search' LIMIT 0 , 30";
	}
	else
	{
		$sql = "SELECT * FROM  `obat` LIMIT 0 , 30";
	}
	/*Dua SQL*/
  	include('koneksi.php');
 	$query= mysql_query($sql);
 	while ($data=mysql_fetch_array($query))
 	{
  	?>
  	<tr>
    <td align="center"><?php echo $data['kd_obat']; ?></td>
    <td align="center"><?php echo $data['nm_obat']; ?></td>
    <td align="center">
    	<table width="100" border="0">
  		<tr>
    	<td><a href="main.php?page=view_obat.php&kd_obat=<?php echo $data['kd_obat']; ?>">View</a></td>
    	<td><a href="main.php?page=edit_obat.php&kd_obat=<?php echo $data['kd_obat']; ?>&nama=<?php echo $data['nm_obat']; ?>&jumlah=<?php echo $data['jml_obat']; ?>&ukuran=<?php echo $data['ukuran']; ?>&harga=<?php echo $data['harga']; ?>">edit</a></td>
    	<td> <a href="main.php?page=delete_obat.php&kd_obat=<?php echo $data['kd_obat']; ?>">Delete</a> </td>
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
