
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
h3{
	color:#CF6;
}
</style>
<link rel="stylesheet" href="css/bootstrap.css"  />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>

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
<h1 align="center"><B>WELCOME TO RED BLOOD BANK</B></h1>
<div class="col-md-6">
<h3>Red Blood Bank (RBB) is an ISO 9001:2008 certified blood bank established in 2002, and is the country’s largest and most modern blood bank with state-of-art technologies and service. A pioneer in voluntary blood donation, RBB does not ask for replacement donors for providing blood to those in need.
</h3>
</div>
<div class="col-md-6">
<img src="image/db.jpg" height="230" />
</div>
</div>

<div class="row" style="margin-top:2%;">
<div class="col-md-6">
<img src="image/db1.jpg" height="350" />
</div>
<div class="col-md-6">
<h3>There is a shortage of over 1 lakh units of blood for patients in Delhi and NCR itself. Many accident victims, innocent children and other people in life threatening situations die due to shortage of blood.<br />
Red Blood Bank aims to meet the requirement of precious blood by organizing voluntary blood donation camps at education institutes, corporate offices and many other organizations and gatherings. RBB relies totally on voluntary donors and dispenses blood to those in need without asking for replacement donation.Voluntary blood donation is a selfless service.
</h3>
</div>
</div>
<canvas id="myCanvas"  style="border:1px solid #d3d3d3; background-color: #ffffff; margin-left: 25%; margin-top: 2%" width="600%" height="60%">
Your browser does not support the HTML5 canvas tag.</canvas>

<script>

var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");


ctx.font = "30px Verdana";
// Create gradient
var gradient = ctx.createLinearGradient(0, 0, c.width, 0);
gradient.addColorStop("0", "purple");
gradient.addColorStop("0.3", "blue");
gradient.addColorStop("0.7", "green");
gradient.addColorStop("1.0", "red");
// Fill with gradient
ctx.strokeStyle = gradient;
ctx.strokeText("Give Love. Donate Blood. Save a Life!", 10, 40);

</script>
<div class="row" style="margin-top:2%;">
<div class="col-md-6">
<h3>We have three suitably modified air- conditioned vans fitted with couches to help conduct blood donation, wherever access to locations of organizations is difficult due to narrow approach roads or other administrative reasons. Additionally, we have a dedicated team of qualified and trained professionals who follow stringent screening procedures, careful documentation and Good Laboratory Practices for collecting, processing and testing blood. We have a very dedicated motivation team which is constantly working hard to disseminate the message of the goodness in donating blood by extending your arm to help your brethren.</h3>
</div>
<div class="col-md-6">
<img src="image/db3.jpg" height="380" />
</div>
</div>
<div class="row" style="margin-top:2%;">
<div class="col-md-6">
<img src="image/db4.jpg" height="200" />
</div>
<div class="col-md-6">
<h3>
Blood donation is harmless, painless and absolutely safe and is, in fact, good for health.
So if you wish to save a precious life, support Rotary Blood Bank and donate blood today!
</h3>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div style="background-color: #272727; color: #ffffff; text-align: center; font-size:larger; padding-top: 2%; padding-bottom: 2%;">
&copy; by Red Blood Bank 
</div></div>
</div>
</body>
</html>
