<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">   
<head><title>Private | Database</title>
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
	
	padding-bottom:140px;
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
<?php
require_once('dbconnect.php');
?>
<body>
<div id="background">
    <img src="dark.jpg" class="stretch" alt="" />
</div>
<div id="wrap">
 <div id="header"><img src="Logo.png" style="float:center;"> </div>
 <hr>
<div id="sidebar">
<h2>
  <p style="text-indent:18em;">Restricted Access: Private </p></h2>
<br>
<br>
<?php
$query = "SELECT cUserName, cName, cAge, cTelephone, cEmail, cAddress, cPostCode, cSpecialisation FROM Customer";
$result = mysql_query($query);
echo "<b>CUSTOMER TABLE </b>";
echo "<table border=1 bordercolor=black>";
echo "<tr class=\"tablehead\">";
echo "<td>UserName</td><td>Name</td><td>Age</td><td>Specialisation</td><td>Telephone</td><td>Email</td><td>Address</td><td>Post Code</td>";
echo "</tr>";

while ($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['cUserName'] . "</td>";
    echo "<td>" . $row['cName'] . "</td>";
    echo "<td>" . $row['cAge'] . "</td>";
    echo "<td>" . $row['cSpecialisation'] . "</td>";
    echo "<td>" . $row['cTelephone'] . "</td>";
    echo "<td>" . $row['cEmail'] . "</td>";
    echo "<td>" . $row['cAddress'] . "</td>";
    echo "<td>" . $row['cPostCode'] . "</td>";
    echo "</tr>";
  }
 
echo "</table>";
mysql_free_result($result);
echo "</br> </br>";
$query = "SELECT rUserName, rName, rAge, rTelephone, rEmail, rAddress, rPostCode, rSpecialisation FROM Reseller";
$result = mysql_query($query);
echo "<b>RESELLER TABLE </b>";
echo "<table border=1 bordercolor=black>";
echo "<tr class=\"tablehead\">";
echo "<td>UserName</td><td>Name</td><td>Age</td><td>Specialisation</td><td>Telephone</td><td>Email</td><td>Address</td><td>Post Code</td>";
echo "</tr>";

while ($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['rUserName'] . "</td>";
    echo "<td>" . $row['rName'] . "</td>";
    echo "<td>" . $row['rAge'] . "</td>";
    echo "<td>" . $row['rSpecialisation'] . "</td>";
    echo "<td>" . $row['rTelephone'] . "</td>";
    echo "<td>" . $row['rEmail'] . "</td>";
    echo "<td>" . $row['rAddress'] . "</td>";
    echo "<td>" . $row['rPostCode'] . "</td>";
    echo "</tr>";
  }
 
echo "</table>";
mysql_free_result($result);
?>
<br>
<br>
<br><br><br><br><br><br>
<p style="text-indent: 32em;">Log out:<a href="Private.html">Log out </a></p>
</div>
<hr>

 <div id="footer">
 Your ticket to world domination!<br>
 Copyright<sup>&copy;</sup> 2012 G51 Villian Supply
 </div>
 </div>
</body>
</html>
