<?php 
function cetak($a)
{

$text = 'abcdefghijklmnopqrstuvwxyz1234567890';

$panj = 28;

$j = 0;

while ($j < $a) {

$result = ""; 

for ($i = 0;$i < $panj; $i++) {
	$result .= $text[rand(0, $panj)];
	}

	echo $result;
	echo "<br>";
		$j++;
	}
	

}

cetak(3);
 ?>
