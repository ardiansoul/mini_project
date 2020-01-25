<?php 
function validate($data) {
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);

	return $data;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (empty($_POST['username'])) {
		echo "username kosong<br>";
	} else {
		$username = validate($_POST['username']);
		if (!preg_match("/^[a-z]{1,6}$/", $username) ) {
				echo "menggunakan huruf kecil dan terdiri dari 6 kata<br>";
				//[a-z] digunakan untuk membatasi huruf yang masuk ke inputan
				//{1,6} digunakan untuk membatasi banyaknya inputan
		} else {
			echo $username."<br>";
		}
	}

	if (empty($_POST['email'])) {
		echo "email kosong<br>";
	} else {
		$email = validate($_POST['email']);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "email tidak valid<br>";
		} else {
			echo $email;
		}
	}

	if (empty($_POST['password'])) {
		echo "password kosong <br>";
	} else {
		$password = validate($_POST['password']);
		if (!preg_match('/^[a-zA-Z0-1]{1,}$/', $password) ) {
				echo "menggunakan huruf kecil dan terdiri dari 6 kata <br>";
			}else{
		echo $password."<br>";
	}}

}



 ?><!DOCTYPE html>
<html>
<head>
	<title>
		form validation
	</title>	
</head>
<body>
<h1>form validation</h1>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
	username :<input type="text" name="username" ><br>
	email :<input type="text" name="email"><br>
	password :<input type="password" name="password"><br>
	<input type="submit" name="input" value="kirim">
</form>
</body>
</html>

