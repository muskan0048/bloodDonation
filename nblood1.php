<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="css/bootstrap.css"  />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Need Blood</title>

</head>

<body style="background-image:url(image/c6.png); background-size:100%; background-attachment:fixed;">
<div>
<?php
 include("nav.php");
?>
</div>
<div class="container" >
<div class="row">
</div></div>

<div style="margin-top:5%;">
<div class="container" >

<table align="center" class=" table table-responsive table-striped  " >
<tr>
	<th><h3><b>Name</b></h3></th>
	<th><h3><b>Email</b></h3></th>
	<th><h3><b>Contact</b></h3></th>
	<th><h3><b>Gender</b></h3></th>
    <th><h3><b>DOB</b></h3></th>
    <th><h3><b>Blood Group</b></h3></th>
    <th><h3><b>Address</b></h3></th>
    <th><h3><b>City</b></h3></th>
    <th><h3><b>Pincode
    </b></h3></th>
	</tr>
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("laghu");
$a=$_REQUEST['bg'];
$b=$_REQUEST['city'];
$c=$_REQUEST['pincode'];

$str=mysql_query("Select * from lblood where BloodG='$a' and (City='$b' or Pincode='$c')");
while($row=mysql_fetch_array($str))
{
	echo "<tr>
	
	<td><h3>$row[Name]</h3></td>
	<td><h3>$row[Email]</h3></td>
	<td><h3>$row[Contact]</h3></td>
	<td><h3>$row[Gender]</h3></td>
	<td><h3>$row[DOB]</h3></td>
	<td><h3>$row[BloodG]</h3></td>
	<td><h3>$row[Address]</h3></td>
	<td><h3>$row[City]</h3></td>
	<td><h3>$row[Pincode]</h3></td>
	
	</tr>";
	}
?>
</table>
</body>
</html>