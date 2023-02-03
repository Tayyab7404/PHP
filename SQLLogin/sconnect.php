<?php

$username = "root";
$password = "rootwdp";
$hostname = "localhost"; 
$database="student";	
$db = mysqli_connect($hostname, $username, $password,$database )or die("Unable to connect to MySQL". mysqli_connect_error());
	
//$db = mysql_connect($hostname, $username, $password,$database ) or die("Unable to connect to MySQL". mysql_connect_error());
if($db)
echo "success";
else
echo "Fail";
$db = mysql_connect('localhost','root','Raina') or 
Die("data base error" .mysql_error());
mysql_select_db('student',$db);
?>