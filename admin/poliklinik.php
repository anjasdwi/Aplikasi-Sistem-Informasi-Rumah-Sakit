<link href="style.css" type="text/css" rel="stylesheet" />
<h2> Data Polilinik </h2>

<table width="700" border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td>
<form action="" method="post" class="search">
Search : <input name="search" type="text" />
<input type="submit" name="klik" value="Cari" />
</form>
</td>
<td width="200" align="right">
<a href="main.php?page=new_poliklinik.php" class="operasi">New</a>
</td>
</tr>
<tr>
<td height="40" align="center" colspan="2" class="judul">
<?php
    if (isset($_POST['klik']))
	{
		$search=$_POST['search'];
    echo 'Data Poliklinik dengan Pencarian : ';
	echo $search;
	}
	else
	{
		echo "Data Poliklinik";
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
		$sql = "SELECT * FROM  `poliklinik` WHERE `poliklinik`.`nm_poli` = '$search' LIMIT 0 , 30";
	}
	else
	{
		$sql = "SELECT * FROM  `poliklinik` LIMIT 0 , 30";
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
            <a href="main.php?page=edit_poliklinik.php&kd_poli=<?php echo $data['kd_poli']; ?>&nm_poli=<?php echo $data['nm_poli']; ?>&lantai=<?php echo $data['lantai']; ?>">
            <img src="images/edit.png"  />
            </a>
            </td>
            <td>
            <a href="main.php?page=delete_poliklinik.php&kd_poli=<?php echo $data['kd_poli']; ?>">
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
            <h2 class="tindakan">Nama Poliklinik</h2>
            <?php echo $data['nm_poli']; ?>
            </td>
            <td>
            <h2 class="tindakan">Kode</h2>
            <?php echo $data['kd_poli']; ?>
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
        <h2 class="tindakan">Lantai</h2>
        <?php echo $data['lantai']; ?>
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