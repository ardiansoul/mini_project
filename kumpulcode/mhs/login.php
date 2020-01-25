<?php 
include "koneksi.php";
$username = $password = "";
$usererr = $passerr = "";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Login
	</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	<input type="text" name="username">
	<input type="password" name="password">
	<input type="submit" name="login">	
</form>
</body>
</html>


<?php 




 ?>