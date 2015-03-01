<html>

<head>

<title>
India Web
</title>
<link rel="stylesheet" type="text/css" href="small.css">
<link href="shift.css" rel="stylesheet">
 <link rel="stylesheet" href="bootstrap.css">
 
 <?php
	
	
 
?>

</head>

<body>

<div class="head">
<div class="name">
<a href="index.php">India WEB</a>
</div>

</div>

<div class="new">
<div class="large">
<h4>Great!!<br></h4>
<p>
Now that we confirmed your mobile number. Tell us something about yourself
</p>
</div>

<hr>
<div class="newusr1">
<form name="resgistration" METHOD ="POST" ACTION = "adduser.php">
First Name : &nbsp;
<input div class="textbox" align="center" tabindex="1" name="enotp" type="textbox"><br><br>
Last Name : &nbsp;&nbsp;&nbsp;
<input div class="textbox" align="center" tabindex="2" name="enotp" type="textbox"><br><br>
Gender :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input div class="textbox" align="center" tabindex="3" name="enotp" type="radio">&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input div class="textbox" align="center" tabindex="4" name="enotp" type="radio">&nbsp;Female<br><br>
Birth Date : &nbsp;&nbsp;&nbsp;
<select div class="textbox" align="center" tabindex="5" name="day" > //birth date
<option selected>Day
<?php //day
	for ($day=1;$day<=31;$day++)
	{
		echo "<option> $day" ;
	}
?>
</select>

<select div class="textbox" align="center" tabindex="6" name="month" >
<option selected>Month
<option> Jan</option>
<option> Feb</option>
<option> Mar</option>
<option> Apr</option>
<option> May</option>
<option> Jun</option>
<option> Jul</option>
<option> Aug</option>
<option> Sep</option>
<option> Oct</option>
<option> Nov</option>
<option> Dec</option>
</select>
<select div class="textbox" align="center" tabindex="7" name="year" >
<option selected>Year
<?php //year
	for ($day=1994;$day<=2014;$day++)
	{
		echo "<option> $day" ;
	}
?>
</select>
<br><br>
</div> 
<p align="center">
<input type="submit" tabindex="8" id="button">
</p>
</form>
</div>

</body>


<html>