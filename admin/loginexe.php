<?php
session_start();
include ('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];
$op=$_GET['op'];

if ($op=="in"){
	$sql = "SELECT * FROM  `login` WHERE username='$username' AND password='$password' ";
 	$query= mysqli_query($sql);
	if (mysqli_num_rows($query)==1)
	{
	$data= mysqli_fetch_array($query);
	$_SESSION['namauser']= $data['username'];
	$_SESSION['password']= $data['password'];
	if ($data['username']){
		header ("location:index.php");
		}
		else
		{
			echo "<script>alert('Kata Sandi atau User salah!'); 
			document.location='../index.php'</script>";
		}
	}
	else
	{
		echo "<script>alert('Kata Sandi atau User salah!'); 
			document.location='../index.php'</script>";
	}
}

?>