<html>

<head>


 
 <?php 
 
	$mobileno=$_POST['mobno'];
	

	if (strlen($mobileno)==10  )
	{
		include("valid.php");
	}
	else
	{
		include("invalid.php");
	}
	
?>
 
</head>





<html>