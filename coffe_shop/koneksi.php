<?php  
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'coffe_shop';

$conn = mysqli_connect($servername,$username,$password);

if (!$conn) {
	die(mysqli_error($conn));
}

mysqli_select_db($conn,$db); 
?>
