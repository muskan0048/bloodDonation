<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="css/bootstrap.css"  />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Donate Blood</title>

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
<h2 align="center" style="color:#09C;"><b>DONOR REGISTRATION</b></h2><br /><br />
<div align="center" style="font-size:larger; ">
<form name="form" method="post" action="dblood1.php">
<p>Enter Name:<br />
<input type="text" name="name" placeholder="Enter Donor's Name"  />
</p>
<p>
Enter E-mail<br />
<input type="email" name="email" placeholder="Enter Donor's Email"  />
</p>
<p>
Enter Contact Number<br />
<input type="number" name="phone" placeholder="Enter Donor's Contact "  />
</p>
<p>Gender:<br />
<input type="radio" value="Male" name="gender" />Male
<input type="radio" value="Female" name="gender" />Female
</p>
<p>Date of Birth:<br>
<input type="date" name="dob" /></p>
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
<p>Address:<br />
<textarea name="addr" rows="3" cols="25"></textarea>
</p>
<p>City:<br />
<input type="text" name="city" placeholder="Enter City" /></p>
<p>Pincode:<br />
<input type="number" name="pincode" placeholder="Enter PINCODE" /></p>
<button class="btn btn-lg btn-info">Register</button>
</form></div>
</div></div></div>
<div class="row">
<div class="col-md-12">
<div style="background-color: #272727; color: #ffffff; text-align: center; font-size:larger; padding-top: 2%; padding-bottom: 2%;">
&copy; by Red Blood Bank 
</div></div>
</div></body></html>