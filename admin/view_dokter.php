<link href="style.css" type="text/css" rel="stylesheet" />
 <?php
 include('koneksi.php');
 $kode=$_GET['kd_dokter'];
 $sql = "SELECT * FROM  `dokter` WHERE dokter.kd_dokter='$kode' LIMIT 0, 1";
 $query= mysql_query($sql);
 while ($data=mysql_fetch_array($query))
 {
?>
 <table class="detail" cellspacing="30" align="center">
 <tr>
 <td>
 
 <table width="600" border="0" cellpadding="2" cellspacing="15">
  <tr>
    <td colspan="3" align="center"><h2>Data Dokter</h2></td>
  </tr>
  <tr>
    <td colspan="3" class="orange" height="5"></td>
  </tr>
  <tr>
    <td width="170">Kode Dokter</td>
    <td width="30">:</td>
    <td><?php echo $data['kd_dokter']; ?></td>
  </tr>
  <tr>
    <td>Nama Dokter</td>
    <td>:</td>
    <td><?php echo $data['nm_dokter']; ?></td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><?php echo $data['tmpt_lahir']; ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $data['alamat']; ?></td>
  </tr>
  <tr>
    <td>No Telp</td>
    <td>:</td>
    <td><?php echo $data['no_telp']; ?></td>
  </tr>
  <tr>
    <td>Kode User</td>
    <td>:</td>
    <td><?php echo $data['kd_user']; ?></td>
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