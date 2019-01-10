<link href="style.css" type="text/css" rel="stylesheet" />
<h2> Data Tindakan </h2>

<table width="700" border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td>
<form action="" method="post" class="search">
Search : <input name="search" type="text" />
<input type="submit" name="klik" value="Cari" />
</form>
</td>
<td width="200" align="right">
<a href="main.php?page=new_tindakan.php" class="operasi">New</a>
</td>
</tr>
<tr>
<td height="40" align="center" colspan="2" class="judul">
<?php
    if (isset($_POST['klik']))
	{
		$search=$_POST['search'];
    echo 'Data Tindakan dengan Pencarian Nama : ';
	echo $search;
	}
	else
	{
		echo "Data Tindakan";
	}
    ?>
</td>
</tr>
<tr>
<td align="center" colspan="2">
<?php
	if (isset($_POST['klik']))
	{
		$search=$_POST['search'];
		$sql = "SELECT * FROM  `tindakan` WHERE `tindakan`.`nm_tindakan` = '$search' LIMIT 0 , 30";
	}
	else
	{
		$sql = "SELECT * FROM  `tindakan` LIMIT 0 , 30";
	}
	/*Dua SQL*/
  	include('koneksi.php');
 	$query= mysql_query($sql);
 	while ($data=mysql_fetch_array($query))
 	{
  	?>
    <table border="0" cellpadding="0" cellspacing="20" class="tindakan">
	<tr>
	<td>
	<table width="300" border="0" cellpadding="0" cellspacing="0">
	<tr>
	<td width="300" height="20" align="right">
        	<table border="0" cellpadding="0" cellspacing="0">
            <tr>
            <td>
            <a href="main.php?page=edit_tindakan.php&kd_tindakan=<?php echo $data['kd_tindakan']; ?>&nama=<?php echo $data['nm_tindakan']; ?>&ket=<?php echo $data['ket']; ?>">
            <img src="images/edit.png"  />
            </a>
            </td>
            <td>
            <a href="main.php?page=delete_tindakan.php&kd_tindakan=<?php echo $data['kd_tindakan']; ?>">
            <img src="images/del.png" />
            </a>
            </td>
            </tr>
            </table>
        
	</td>
	</tr>
	<tr>
	<td width="300" height="50" valign="top">
        	<table width="300" border="0" cellpadding="0" cellspacing="0">
            <tr>
            <td valign="top" width="200">
            <h2 class="tindakan">Nama Tindakan</h2>
            <?php echo $data['nm_tindakan']; ?>
            </td>
            <td>
            <h2 class="tindakan">Kode</h2>
            <?php echo $data['kd_tindakan']; ?>
            </td>
            </tr>
            </table>
	</td>
	</tr>
    <tr>
    <td>
    <hr class="garis" />
    </td>
    </tr>
	<tr valign="top">
		<td width="300" height="50">
        <h2 class="tindakan">Keterangan </h2>
        <?php echo $data['ket']; ?>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
    
    <?php
 }
	?>
</td>
</tr>
</table>