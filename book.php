<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<title>Restaurant</title>
</head>

<body background="images1/banner2.jpg" style="background-size:100%; background-repeat:no-repeat;">
<h1 align="left" style="color: #ffffff; margin-top: 2%; margin-left: 2%;">
<i><a href="index.php" style="text-decoration: none; color: #ffffff;">Go Holiday</a></i>
</h1>
<div style="margin-top:22%;">
<?php
 include("nav.php");
?>
</div>


<h1 align="center" style="color: #0000000; margin-top: 27%; font-size:48px;">
BOOK
</h1>
<hr width="100%" />
<div class="container">
<div class="row">
<form name="form" method="post" action="">
<p>I Want to go:<br />
<input type="text" name="city" placeholder="Enter City" /></p>
<p>I Want to Book:<br />
<select name="select">
<option value="Hotel">Hotel</option>
<option value="Inn">Inn</option>
<option value="Restaurant">Restaurant</option>
</select>
</form>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div style="background-color: #272727; color: #ffffff; text-align: center; font-size:larger; padding-top: 2%; padding-bottom: 2%;">
&copy; by Go Holiday 
</div></div>
</div>

</body>
</html>