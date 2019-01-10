<link href="style.css" type="text/css" rel="stylesheet" />
 <?php
 include('koneksi.php');
 $tgl=$_GET['tgl_kunjungan'];
 $sql = "SELECT * FROM `kunjungan` INNER JOIN `pasien` INNER JOIN `dokter` INNER JOIN `poliklinik` WHERE kunjungan.tgl_kunjungan=dokter.tgl_kunjungan AND kunjungan.no_pasien=pasien.no_pasien AND kunjungan.kd_poli=poliklinik.kd_poli AND dokter.tgl_kunjungan='$tgl'";
 $query= mysql_query($sql);
 while ($data=mysql_fetch_array($query))
 {
?>
 <table class="detail" cellspacing="30" align="center">
 <tr>
 <td>
 
 <table width="600" border="0" cellpadding="2" cellspacing="15">
  <tr>
    <td colspan="3" align="center"><h2>Data Kunjungan</h2></td>
  </tr>
  <tr>
  <td colspan="3">
  		<table width="600" border="0" cellspacing="0" cellpadding="0">
  		<tr>
    	<td>Tanggal    : <?php echo $data['tgl_kunjungan']; ?></td>
    	<td width="200" align="right">Jam : <?php echo $data['jam_kunjungan']; ?></td>
  		</tr>
		</table>
   </td>
    </tr>
  <tr>
    <td colspan="3" class="orange" height="5"></td>
  </tr>
  
   <tr>
    <td width="170" colspan="3">
    	
        <table width="600" border="0" cellpadding="2" cellspacing="10">
  		<tr>
    	<td width="170">Poliklinik</td>
        <td width="30">:</td>
        <td><?php echo $data['nm_poli']; ?></td>
        </tr>
        <tr>
    	<td width="170">Dokter</td>
        <td width="30">:</td>
        <td><a href="main.php?page=view_dokter.php&kd_dokter=<?php echo $data['kd_dokter']; ?>" class="data"><?php echo $data['nm_dokter']; ?></a></td>
        </tr>
		</table>
        
    </td>
  </tr>
  <tr>
        <td colspan="3" align="center" valign="top"><hr class="garis" /></td>
  </tr>
  <tr>
  <td>
   <table width="600" border="0" cellpadding="2" cellspacing="10">
  	<tr>
    <td width="170">No Pasien</td>
    <td width="30">:</td>
    <td><?php echo $data['no_pasien']; ?></td>
  </tr>
  <tr>
    <td>Nama Pasien</td>
    <td>:</td>
    <td><?php echo $data['nm_pasien']; ?></td>
  </tr>
  <tr>
    <td>Jenis Kelmain</td>
    <td>:</td>
    <td><?php echo $data['j_kel']; ?></td>
  </tr>
  <tr>
    <td>Agama</td>
    <td>:</td>
    <td><?php echo $data['agama']; ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $data['alamat']; ?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><?php echo $data['tgl_lhr']; ?></td>
  </tr>
  <tr>
    <td>Usia</td>
    <td>:</td>
    <td><?php echo $data['usia']; ?></td>
  </tr>
  <tr>
    <td>No Telp</td>
    <td>:</td>
    <td><?php echo $data['no_telp']; ?></td>
  </tr>
  <tr>
    <td>Nama KK</td>
    <td>:</td>
    <td><?php echo $data['nm_kk']; ?></td>
  </tr>
  <tr>
    <td>Hubungan Keluarga</td>
    <td>:</td>
    <td><?php echo $data['hub_kel']; ?></td>
    </table>
  </td>
  </tr>
  <tr>
    <td class="orange" colspan="3"></td>
  </tr>
</table>

</td>
</tr>
</table>


<?php
 }
 
 ?>