<?php 
function count_handshake($a)
{
	$b = 0;
	for ($i=1; $i < $a; $i++) { 
		$b += $a;
		$a--;
	}
	return $b;
}


echo count_handshake(9);


 ?>