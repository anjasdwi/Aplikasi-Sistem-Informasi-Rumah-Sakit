<link href="style.css" type="text/css" rel="stylesheet" />
 <?php
 include('koneksi.php');
 $kd_obat=$_GET['kd_obat'];
 $sql = "SELECT * FROM  `obat` WHERE obat.kd_obat='$kd_obat'";
 $query= mysql_query($sql);
 while ($data=mysql_fetch_array($query))
 {
?>
 <table class="detail" cellspacing="30" align="center">
 <tr>
 <td>
 
 <table width="600" border="0" cellpadding="2" cellspacing="15">
  <tr>
    <td colspan="3" align="center"><h2>Data Obat</h2></td>
  </tr>
  <tr>
    <td colspan="3" class="orange" height="5"></td>
  </tr>
  <tr>
    <td width="170">Kode Obat</td>
    <td width="30">:</td>
    <td><?php echo $data['kd_obat']; ?></td>
  </tr>
  <tr>
    <td>Nama Obat</td>
    <td>:</td>
    <td><?php echo $data['nm_obat']; ?></td>
  </tr>
  <tr>
    <td>Jumlah</td>
    <td>:</td>
    <td><?php echo $data['jml_obat']; ?></td>
  </tr>
  <tr>
    <td>Ukuran</td>
    <td>:</td>
    <td><?php echo $data['ukuran']; ?></td>
  </tr>
  <tr>
    <td>Harga</td>
    <td>:</td>
    <td><?php echo $data['harga']; ?></td>
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