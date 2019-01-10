<?php
session_start();

//cek apakah user sudah login
if(isset($_SESSION['namauser'])){
    echo "<script>alert('Logout jika ingin kembali'); document.location='admin/index.php'</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body leftmargin="0" topmargin="0" bottommargin="0" rightmargin="0">
<table width="800" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td height="40">
    
    <table height="40" width="800" class="menu" cellpadding="0" cellspacing="0">
    <tr>
    <td>
     <!-- menu -->
      <?php include('menu.php'); ?>
     <!-- menu Akhir --> 
    </td>
    </tr>
    </table>
    
    </td>
  </tr>
  <tr>
    <td align="center">
<!-- head -->  
    <table height="300" width="800" class="head" cellpadding="0" cellspacing="0">
    <tr>
    <td align="center">
    
    	<table height="300" width="700" border="0" cellpadding="0" cellspacing="0">
    	<tr>
    	<td width="350" align="center">
        	
            <!-- logo --> 
        	
            <?php
				include('logo.php');
				?>
        
         <!-- logo akhir -->  
    	
        </td>
    	<td width="350" align="center">
        <?php include('login.php'); ?>
        
        </td>
    	</tr>
    	</table>
    
    
    </td>
    </tr>
    </table>
<!-- head akhir -->   
    </td>
  </tr>
  <tr>
    <td valign="top">
    
    <table height="400" width="800" class="isi" cellpadding="0" cellspacing="0">
    <tr>
    <td>
    <h2> Sejarah RSUD Karawang </h2>
    <p>Mulai tahun 1995 sampai dengan tahun 2006 RSUD Karawang dipimpin oleh seorang
direktur yang benama Dr.H.Hanna Permana Subanegara, MARS. Beliau adalah dokter umum
pindahan dari RS Serang, yang sedang menjalankan pendidikan S2 Administrasi Rumah Sakit di
Universitas Indonesia.Tanggal 28 Oktober 1997 Visi RSUD Karawang menjadi Rumah Sakit
Kelas B terwujud dengan ditetapkannya RSUD Karawang menjadi Rumah Sakit Kelas B Non
Pendidikan melalui SK Menkes RI No. 1230/Menkes/SK/X/1997,kemudian disyahkan oleh
Pemda Karawang melalui Perda No. 9 tahun 1999.</p>
<p>
Dalam mewujudkan visi untuk mempunyai
rumah sakit dengan sarana dan prasarana memadai dilaksanakan strategi pembuatan dan pengajuan
proposal relokasi rumah sakit serta pengajuan permintaan alat-alat medis dan non medis kepada
pemerintah pusat.Departemen Kesehatan secara bertahap selama 5 tahun,memerlukan biaya
sebesar Rp. 177 M,dan tanah seluas 6,6 Ha.Tahun 2001 pembangunan tahap pertama untuk
relokasi mulai dilaksanakan. Relokasi menempati lahan 6,6 Ha yang berlokasi di Desa Sukaharja
Kecamatan Teluk Jambe, Kabupaten Karawang, sekitar 2 km dari lokasi lama. Tahun 2002
pembangunan tahap pertama dan kedua selesai meliputi pembangunan gedung administrasi,rawat
jalan,IGD,instalasi Ibu dan Anak,Radiologi,Farmasi dan ruang rawatan berkapasitas 66 tempat
jalan,IGD,instalasi Ibu dan Anak,Radiologi,Farmasi dan ruang rawatan berkapasitas 66 tempat
tidur.Tanggal 27 September 2003,gedung tersebut diatas diresmikan oleh Menteri Kesehatan RI
dan dioperasionalkan untuk memberikan pelayanan kesehatan kepada masyarakat Kabupaten
Karawang dan sekitarnya, karena pembangunan belum selesai seluruhnya, RSUD Karawang dalam
kurun waktu 6 bulan beroperasi di 2 tempat yaitu gedung lama meliputi kamar bedah, ruang
perawatan dengan kapasitas 200 tempat tidur,kamar bersalin,laundry,gizi dan kamar
jenazah.Penunjang pelayanan medis berupa labolatorium, farmasi dan radiologi beroperasi di tempat
lama dan tempat baru dengan resiko peralatan dan SDM tebagi dua.Pada tanggal 1 April 2004
rumah sakit seluruhnya pindah ke gedung baru dengan kapasitas 165 tempat tidur yang
menggunakan peralatan medis lama.Pada bulan Desember 2007,RSUD Karawang telah lulus
akreditasi 16 pelayanan dengan kategori penuh tingkat lengkap.Pembangunan gedung dari tahun
2001 sampai sekarang telah mencapai 90% dari rencana dan telah menggunakan dana sebesar RP.
74,2 Milyar.Dan untuk penambahan peralatan medis menggunakan dana sebesar 16,4 Milyar atau
mencapai 18.2% dari rencana.</p>
    </td>
    </tr>
    <tr>
    <td height="10" class="orange">&nbsp;
    
    </td>
    </tr>
    </table>
    
    
    </td>
  </tr>
  <tr>
    <td height="100" valign="top">
    
    <table width="800" height="80" border="0" cellspacing="0" cellpadding="0" class="footer">
  	<tr>
    <td>
    
    	<table width="800" border="0" cellspacing="0" cellpadding="0">
        <tr>
        <td align="center">
        	<table cellspacing="0" cellpadding="0">
            <tr>
            <td width="150">
        	<img src="images/bar.png" width="130" height="64" /> 
        	</td>
            <td>
            
            	<table cellspacing="0" cellpadding="0" class="copyright">
            	<tr>
            	<td width="150">
                2014 &copy; anjas_dw1
        		</td>
            	</tr>
                <tr>
            	<td width="150">
                Powered By Anjas Dwi
        		</td>
            	</tr>
            	</table>
             
        	</td>
            </tr>
            </table>
        </td>
        </tr>
        </table>
    
    </td>
  	</tr>
	</table>

    
    </td>
  </tr>
</table>

</body>
</html>