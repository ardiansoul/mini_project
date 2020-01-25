<?php 
if (isset($_POST['login'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if ($user == "ardi" && $pass == "admin") {
		echo "<h2> login berhasil";
	} else {
		echo "maaf anda salah";
	}
}



 ?>