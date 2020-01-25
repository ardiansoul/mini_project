<?php 

//STRUKTUR PENGULANGAN
//SINTAKS PENGULANGAN ADA 4
//STRUKTUR PENGULANGAN FOR

//PENGULANGAN FOR
echo "contoh perulangan for 1
<br>"; 

for ($i=0; $i < 3; $i++) { 
	echo "$i";
}
echo "<br><br>";
echo "contoh perulangan for 2
<br>";

for ($i = 0 ; ; $i++) {
	if ($i > 2) {
	 	break;
	 } 
	echo "$i";
}
echo "<br><br>";

//contoh pengulangan for 3

echo "contoh perulangan for 3";
echo "<br>";
$i = 0;
for (; ; ) {
if ($i > 2) {
 	break;
 } 
	echo "$i";
	$i++;
}
echo "<br><br>";

echo "contoh perulangan for 4";
echo "<br>";
for ($i=0; $i < 3; print "$i", $i++) { 
	# code...
}
echo "<br><br>";
//pengulangan while

echo "contoh perulangan while 1";
echo "<br>";
$i = 0;
while ($i < 3){
	echo "$i";
	$i++;
}
echo "<br><br>";
echo "contoh perulangan while 2";
echo "<br>";
$i = 0;
while ($i <= 2){
	echo $i++;
}

$i = 0;
while ($i <= 2){
	echo "<h$i>heading $i </h$i>";
	$i++;
}
//pengulangan do_while
$i = 1;
do{
	echo "$i";
	$i+=2;
}while ($i<=3)
// do {
// 	echo "percobaan php";
// 	$F++;
// } while ($F=10);














 ?>