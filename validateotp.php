<html>

<head>

<title>
India Web
</title>

 
 <?php 
 
	session_start();
	$genotp = $_SESSION['genotp'];
	$enotp= $_POST['enotp'];
	
	
	
	if ($genotp==$enotp)
	{
		include('validotp.php');
	}
	else
	{
		include('invalidotp.php');
	}
	


?>
 
</head>




<html>