<?php 
/*
	OPERATOR
operator aritmatika
	1. operator pertambahan
		operator ini menggunakan simbol + untuk menaambahkan nilai
		contoh : 
		$a + $b

	2. operator pengurangan
		operator ini menggunakan simbol - untuk mengurangi nilai
		contoh :
		$a - $b
	3. oprator pengalian
		operator ini menggunakan simbol * untuk mengalikan nilai
		contoh :
		$a * $b
	4. operator pembagian
		operator ini menggunakan simbol / untuk membagikan nilai
		contoh :
		$a / $b
	5. operator modulus
		operator ini menampilkan sisa pembagian dari 2 niiai, menggunakan sinmbol % sebagai operator
		contoh :
		$a % $n

operator penugasan
	operator penugasan menggunakan simbol -
		contoh $a = 4;

operator bitwise




*/
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);

echo "gaji sebelum pajak = Rp. $gaji <br>";
echo "gaji sesudah terkena pajak = Rp. $thp <br>";

echo "-------------------------------------------------";

$a = 5;
$b = 4;

echo "<br> $a == $b : ". ($a == $b);
echo "<br> $a != $b :". ($a != $b);
echo "<br> $a > $b :".($a > $b);
echo "<br> $a < $b : ".($a < $b);
echo "<br> ($a != $b) && ($a > $b) : ".(($a != $b)&&($a > $b));
echo "<br> ($a == $b) || ($a < $b) : ".(($a == $b)|| ($a < $b));


 ?>