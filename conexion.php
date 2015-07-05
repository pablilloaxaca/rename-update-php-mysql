<?php 
$server = "localhost";
$username = "userdb"; //user bd
$password = "passdb"; //pass bd
$database = "namebd"; //name bd
	// if you changed your graphic to be 50 pixels wide, you should change the value above
$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());
mysql_select_db($database, $con);
mysql_set_charset('utf8',$con);

?>
