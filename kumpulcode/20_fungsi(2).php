<?php 
function cetak_tebal($awal, $akhir)
{
	for ($i=$awal; $i < $akhir; $i++) { 
		if ($i%2 == 1) {
			echo "<b>$i</b>";
		}
	}
}

$a = 10;
$b = 50;
echo "<b> bilangan ganjil dengan cetak tebal : dari $a sampai $b : </b><br>";
cetak_tebal($a,$b);




 ?>