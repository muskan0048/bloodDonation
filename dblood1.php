<?php

mysql_connect("localhost", "root", "");
mysql_select_db("laghu");
$a=$_REQUEST['name'];
$b=$_REQUEST['email'];
$c=$_REQUEST['phone'];
$d=$_REQUEST['gender'];
$e=$_REQUEST['dob'];
$f=$_REQUEST['bg'];
$g=$_REQUEST['addr'];
$h=$_REQUEST['city'];
$i=$_REQUEST['pincode'];
mysql_query("insert into lblood values('', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i')");

?>