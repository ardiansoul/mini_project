<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "mhs_db";

$conn = mysql_connect($servername,$username,$password);

if (!$conn) {
	die(mysql_error());
} else {
	$select_db = mysql_select_db($db);
	if (!$select_db) {
		die(mysql_error());
	}
}

 ?>