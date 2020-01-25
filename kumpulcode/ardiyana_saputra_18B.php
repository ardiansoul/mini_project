<!DOCTYPE html>
<html>
<head>
	<title>latihan bab 3</title>
</head>
<body>
<form action="" method="POST" name="input">
	<h2>masukan nilai yang ingin di olah</h2>
	nilai pertama	: <input type="text" name="a"> <br>
	nilai kedua		: <input type="text" name="b"> <br>
	nilai ketiga	: <input type="text" name="c"> <br>
	nilai keempat	: <input type="text" name="d"> <br>
	nilai kelima	: <input type="text" name="e"> <br>
	<input type="submit" name="hitung" value="hitung">
	<input type="reset" name="reset" value="reset">

<?php 
if (isset($_POST['hitung'])) {
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$e = $_POST['e'];
if ($a&& $b && $c && $d && $e > 0) {
	$f = $a+$b-$c+$d-$e;
	$g = (($a+$b)/($c*$d)-$e);
	$g2 = pow($g, 2);
	$h = (($a*$b)+($c/$d))/$e;
	echo "<br> A. ".$a."+".$b."-".$c."+".$d."-".$e." = ".$f;
	echo "<br> B. ((".$a."+".$b.")/(".$c."*".$d.")-".$e.")/2 = ".$g2;
	echo "<br> C. ((".$a."*".$b.")+(".$c."/".$d."))/".$e." = ".$h;
} else{
	echo "<br>maaf anda belum memasukan";
}
}
 ?>


</form>
</body>
</html>