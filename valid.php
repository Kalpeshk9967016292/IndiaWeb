<html>

<head>

<title>
India Web
</title>
<link rel="stylesheet" type="text/css" href="mycss.css">
<link href="shift.css" rel="stylesheet">
 <link rel="stylesheet" href="bootstrap.css">
 
 <?php
	
	$mobileno=$_POST{'mobno'};
		if (strlen($mobileno) !=10  )
		{
			include("invalid.php");
		}
	
	
	$userID="9967016292"; //10 digit, way2sms id, from which admin will send SMS
	$userPWD="9867319264"; // password for user id
	$recerverNO=$_POST['mobno']; // recever's Number, who is going to receive sms
	$genotp = rand(1000, 9999);
	$message=$genotp;
	
	session_start();
	$_SESSION['genotp']=$genotp;
 
?>

</head>

<body>

<div class="head">
<div class="name">
<a href="index.php">India WEB</a>
</div>
<form name="login">
<div class="login">
<font color="#fff">Mobile No.&nbsp;</font>
<input div class="textbox" tabindex="1" name="username" type="textbox"><br><br>
<font color="#fff">Password  &nbsp;&nbsp;</font>
<input div class="textbox" tabindex="2" name="pasword" type="password"><br><br>
<input type="submit" value="Login" id="loginbtn">
</div>
</form>
</div>

<div class="new">
<div class="large">
<h1>Great!!</h1>
</div>

<hr>
<div class="newusr">
<form name="resgistration" METHOD ="POST" ACTION = "validateotp.php">
We have sent you a text message with a confirmation code<br>On <?php  echo $_POST['mobno'] ?> . When you receive it enter it below <br><br>
<input div class="textbox" align="centers" tabindex="3"  value="<?php  echo $genotp ?>" name="enotp" type="textbox">


</div> 

<p align="center">

<input type="submit" id="button">



</p>
</form>
</div>

</body>


<html>