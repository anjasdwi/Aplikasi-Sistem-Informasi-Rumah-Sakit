<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['namauser'])){
    echo "<script>alert('Anda Harus Login Dahulu'); document.location='../login.php'</script>";
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
        <?php
		include('menejemen.php'); 
		?>
         
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
    <td valign="top">
    
    <?php
	
	if (isset($_GET['page']))
	{
	$page=$_GET['page'];
	}
	if (!empty($page))
	{
	include($page);
	}
	?>
    
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

</body>
</html>