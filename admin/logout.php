<?php
session_start();
session_destroy();
echo "<script>alert('Anda sudah logout'); 
	document.location='../index.php'</script>";
?>