<?php 
echo "halaman ini merupakan contoh penciptaan session";
//session_start ditaruh di depan saat sesi akan dimulai
session_start();
if (isset($_POST['login'])) {
	$user = $_POST ['user'];
	$pass = $_POST ['pass'];
	if ($user == "ardi" && $pass == "123") {
		$_SESSION['login'] = $user;
		echo "<h1> anda berhasil ";
		echo "klik <a href ='43_session(2).php'>di sini(43_session(2).php)</a> untuk di periksa";
	}
} else {
?>
<!DOCTYPE html>
<html>
<head>
	<title>login here...</title>
</head>
<body>
<form action="" method="POST">
	<h2>login</h2>
	username : <input type="text" name="user"><br>
	password ; <input type="password" name="pass"><br>
	<input type="submit" name="login" value="login">
</form>
</body>
</html>



<?php } ?>