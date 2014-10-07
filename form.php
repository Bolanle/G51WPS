<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">   
<head><title>Registered!</title>
<style type="text/css">
	body {
	background:black;
	color:#800880;
	font-family: Verdana, Arial, sans-serif; }
	#wrap {		
		width:1200px;
		margin:0 auto;
		background:black;
		opacity:0.95;
	        filter:alpha(opacity=60);
	}
	#header {
    	padding:2px 10px;	
	text-align:center;
	}
	#sidebar {
	
	padding-bottom:420px;
	text-align:left;
	}
	#footer {
	margin:0;
	text-align:center;
	font-size: xx-small;
	}
	#background {
	width: 100%; 
	height: 100%; 
	position: absolute; 
	left: 0px; 
	top: 0px; 
	z-index: 0;
	}

	.stretch {
	width:100%;
	height:100%;
	}
	</style>
 </head>
<body>
<div id="background">
    <img src="dark.jpg" class="stretch" alt="" />
</div>
<div id="wrap">
 <div id="header"><img src="Logo.png" style="float:center;"></div>
 <hr>
<div id="sidebar">
<h2>
  <p style="text-indent:18em;">Registration Notification</p></h2>
<?php

$con = mysql_connect('mysql.cs.nott.ac.uk', beo01u, qwerty);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("beo01u", $con);

if ($_POST['person'] == "customer") {
 $sql="INSERT INTO Customer (cUserName, cName, cAge, cTelephone, cEmail, cAddress, cPostCode, cSpecialisation)
 VALUES
 ('$_POST[username]','$_POST[firstname]', '$_POST[age]', '$_POST[telephone]','$_POST[email]','$_POST[address]','$_POST[postcode]','$_POST[special]')";
 if (!mysql_query($sql,$con))
 {
 die('Error: The username you have chosen is unavailable');
 }
 echo "Your details have been entered into our customer database";
}
else {
    $sql="INSERT INTO Reseller (rUserName, rName, rAge, rTelephone, rEmail, rAddress, rPostCode, rSpecialisation)
 VALUES
 ('$_POST[username]','$_POST[firstname]', '$_POST[age]', '$_POST[telephone]','$_POST[email]','$_POST[address]','$_POST[postcode]','$_POST[special]')";
 if (!mysql_query($sql,$con))
 {
 die('Error: The username you have chosen is unavailable');
 }
 echo "Your details have been entered into our reseller database";
}
mysql_close($con);
?>
</div>
 <div id="footer">
 Your ticket to world domination!<br>
 Copyright<sup>&copy;</sup> 2012 G51 Villian Supply
 </div>
 </div>
</body>
</html>
