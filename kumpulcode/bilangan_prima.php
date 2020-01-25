<?php 

function bil_prima($n)
{
	for ($i=1; $i <= $n; $i++) { 
		$counter = 0;
		for ($j=1; $j <= $i; $j++) { 
			if ($i % $j == 0) {
				$counter++;

			}
		}
		if ($counter == 2) {
			print $i;
		}
	}
}
function bilang($a,$b)
{
	for ($x=0; $x < $a; $x++) {
			
		for ($y=0; $y < $b; $y++) {
		echo ;

		}
	}
}

bilang(3,5);






















 ?>