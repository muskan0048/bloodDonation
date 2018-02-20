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
<div class="row">
<h2 align="center" style="color:#09C;"><b>BLOOD REQUISTION FORM</b></h2><br /><br />
<div align="center" style="font-size:larger; ">
<form name="form" method="post" action="nblood1.php">
<p>Blood Group:<br />
<select name="bg">
<option value="A+" >A Positive</option>
<option value="A-">A Negative</option>
<option value="B+">B Positive</option>
<option value="B-">B Negative</option>
<option value="AB+">AB Positive</option>
<option value="AB-">AB Negative</option>
<option value="O+">O Positive</option>
<option value="O-">O Negative</option>
</select><br />
</p>
</p>
<p>City:<br />
<input type="text" name="city" placeholder="Enter City" /></p>
<p>Pincode:<br />
<input type="number" name="pincode" placeholder="Enter PINCODE" /></p>
<button class="btn btn-lg btn-info">Submit</button>
</form></div>
</div></div></div>
<div class="row" style="margin-top:15%;">
<div class="col-md-12">
<div style="background-color: #272727; color: #ffffff; text-align: center; font-size:larger; padding-top: 2%; padding-bottom: 2%;">
&copy; by Red Blood Bank 
</div></div>
</div></body></html>