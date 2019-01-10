<link href="style.css" type="text/css" rel="stylesheet" />
<h2> Data Lab</h2>

<table width="700" border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td>
<form action="" method="post" class="search">
Search : <input name="search" type="text" />
<input type="submit" name="klik" value="Cari" />
</form>
</td>
<td width="200" align="right">
<a href="main.php?page=new_lab.php" class="operasi">New</a>
</td>
</tr>
</table>

<table width="700" border="0" class="isidata" align="center">
  <tr>
    <td colspan="5" align="center" height="50" class="isi">
    <?php
    if (isset($_POST['klik']))
	{
		$search=$_POST['search'];
    echo 'Data Lab dengan Pencarian Nama : ';
	echo $search;
	}
	else
	{
		echo "Data Lab";
	}
    ?>
    
    </td>
  </tr>
  <tr>
    <td  height="30" align="center" class="judul">Kode Lab</td>
    <td height="30" align="center" class="judul">No RM</td>
    <td height="30" align="center" class="judul">hasil lab</td>
    <td height="30" align="center" class="judul">Ket</td>
    <td width="170" height="30" align="center" class="judul">Action</td>
  	</tr>
	<?php
	if (isset($_POST['klik']))
	{
		$search=$_POST['search'];
		$sql = "SELECT * FROM  `laboratorium` WHERE `laboratorium`.`kd_lab` = '$search' LIMIT 0 , 30";
	}
	else
	{
		$sql = "SELECT * FROM  `laboratorium` LIMIT 0 , 30";
	}
	/*Dua SQL*/
  	include('koneksi.php');
 	$query= mysql_query($sql);
 	while ($data=mysql_fetch_array($query))
 	{
  	?>
  	<tr>
    <td align="center"><?php echo $data['kd_lab']; ?></td>
    <td align="center"><?php echo $data['no_RM']; ?></td>
    <td align="center"><?php echo $data['hasil_lab']; ?></td>
    <td align="center"><?php echo $data['ket_lab']; ?></td>
    <td align="center">
    	<table width="100" border="0">
  		<tr>
    	<td><a href="main.php?page=edit_lab.php&kd_lab=<?php echo $data['kd_lab']; ?>&no_RM=<?php echo $data['no_RM']; ?>&hasil_lab=<?php echo $data['hasil_lab']; ?>&ket=<?php echo $data['ket_lab']; ?>">edit</a></td>
    	<td> <a href="main.php?page=delete_lab.php&kd_lab=<?php echo $data['kd_lab']; ?>">Delete</a> </td>
  		</tr>
		</table>
    </td>
  </tr>
    <?php
 }
	?>
    <tr class="judul">
    <td height="20" colspan="5">
    </td>
    </tr>
</table>
