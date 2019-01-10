<link href="style.css" type="text/css" rel="stylesheet" />
 
 <table class="detail" border="0" cellspacing="30" align="center">
 <tr>
 <td>
 
 <?php
 include('koneksi.php');
 $rm=$_GET['rm'];
 $sql = "SELECT * FROM `rekam_medis` INNER JOIN `pasien` INNER JOIN `obat` INNER JOIN `tindakan` WHERE
 rekam_medis.no_pasien=pasien.no_pasien AND rekam_medis.kd_obat=obat.kd_obat AND rekam_medis.kd_tindakan=tindakan.kd_tindakan AND `rekam_medis`.`no_RM` = '$rm' LIMIT 0 , 30";
 $query= mysql_query($sql);
 while ($data=mysql_fetch_array($query))
 {
?>
 <table width="600" border="0" cellpadding="2" cellspacing="15">
  <tr>
    <td colspan="3" align="center"><h2>Data Medis</h2></td>
  </tr>
  <tr>
    <td colspan="3" align="center">
    	
        <table width="600" border="0" cellspacing="0" cellpadding="0">
  		<tr>
    	<td>Tanggal    : <?php echo $data['tgl_pemeriksaan']; ?></td>
    	<td width="200" align="right">No. Rekam Medis : <?php echo $data['no_RM']; ?></td>
  		</tr>
		</table>

    </td>
  </tr>
  <tr>
    <td colspan="3" class="orange" height="5"></td>
  </tr>
  <tr>
    <td width="80">Nama Pasien</td>
    <td width="20">:</td>
    <td><a href="main.php?page=view_pasien.php&no_pasien=<?php echo $data['no_pasien']; ?>" class="data"><?php echo $data['nm_pasien']; ?></a></td>
  </tr>
  <tr>
    <td>Keluhan</td>
    <td>:</td>
    <td><?php echo $data['keluhan']; ?></td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="top"><hr class="garis" /></td>
  </tr>
  <tr>
  <td colspan="3">
  		<table cellpadding="0" cellspacing="0" width="600" class="view">
    	<tr>
        <td height="25" width="150">Diagnosa</td>
        <td>:</td>
        <td><?php echo $data['diagnosa']; ?></td>
        </tr>
        <tr>
        <td height="25">Tindakan</td>
        <td>:</td>
        <td><?php echo $data['nm_tindakan']; ?></td>
      	</tr>
      	<tr>
        <td height="25">Resep</td>
        <td>:</td>
        <td><?php echo $data['resep']; ?></td>
      	</tr>
      	<tr>
        <td colspan="3">
        
        <table width="600" cellpadding="0" cellspacing="0" class="view">
        <tr>
        <td height="25" width="150">Obat</td>
        <td>:</td>
        <td width="150"><a href="main.php?page=view_obat.php&kd_obat=<?php echo $data['kd_obat']; ?>" class="data"><?php echo $data['nm_obat']; ?></a></td>
        <td>(<?php echo $data['jml_obat']; ?> <?php echo $data['ukuran']; ?>)</td>
      	</tr>
        </table>
        
        </td>
      	<tr>
        <td height="25">Keterangan</td>
        <td>:</td>
        <td><?php echo $data['ket_rm']; ?></td>
      	</tr>
  		</table>
        </td>
        </tr>
  	<tr>
    <td class="orange" colspan="3"></td>
  	</tr>
	</table>
    <?php
 	}
 	?>
    
</td>
</tr>
<tr>
<td align="center">
 <?php
 $sql2 = "SELECT * FROM `laboratorium` INNER JOIN rekam_medis WHERE laboratorium.no_rm = rekam_medis.no_rm AND
 laboratorium.no_rm = '$rm'";
 $query2= mysql_query($sql2);
 if ($data=mysql_fetch_array($query2))
 {
 ?>
 <table cellpadding="0" cellspacing="0" class="hasillab">
 <tr>
 <td>
 	<table cellpadding="0" cellspacing="0" width="600">
    	<tr>
        <td colspan="3" height="25" width="150" align="center">Hasil Laboratorium <p class="hasil"><?php echo $data['hasil_lab']; ?></p></td>
      	</tr>
        <tr>
        <td height="25" width="150">Keterangan Lab</td>
        <td>:</td>
        <td><?php echo $data['ket_lab']; ?></td>
      	</tr>
 	</table>
 </td>
 </tr>
 </table>
 <?php
 }
 else
 {
 ?>
 	<table cellpadding="0" cellspacing="0" width="600">
    	<tr>
        <td colspan="3" height="25" width="150" align="center">Hasil Laboratorium <p class="hasil">dalam proses</p></td>
      	</tr>
 	</table>
    <?php
 }
	?>
 </td>
 </tr>
 </table>