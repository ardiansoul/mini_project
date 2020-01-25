<?php 

	//pengondisian
	//ada tiga struktur perkondisian yaitu
	//perkondisian if dimana jika kondisi bernilai true maka statment akan di eksekusi namun jika tidak tidak maka steatment akan di lewati
	
	echo "contoh penulisan sintax if <br>";
	$a = 10;
	if ($a = 10) {
		echo "variabel a beriisi 10";
	}


	//perkondisian yang kedua adalah perkondisian if_else
	//jika kondisi bernilai true maka steatment akan di eksekusi namun jika tidak maka steatment else yang akan di eksekusi

	echo "contoh penulisan sintak if_else <br>";

	if ($a = 10) {
		echo "pernyataan if akan di eksekusi jika kondisi bernilai true";
	} else {
		echo "namun jika kondisi bernilai false maka pernyataan else yang akan di eksekusi";
	}
	
	//perkondisian yang ketiga adalah perkondisian khusus ?

	$F = ($a = 10) ? "SAMA": "TIDAK" ;
	echo "$F";

	//perkondisian switch_case sering disamakan dengan pernyataan if bersarang namun menurut saya sendiri switch_case lebih sederhana dari pada if bersarang

	echo "contoh switch_case";


	// switch (variable) {
	// 	case 'value':
	// 		# code...
	// 		break;
		
	// 	default:
	// 		# code...
	// 		break;
	// }


	$user = " ";
	if (!isset($user)) {
		echo "variabel tidak ada";
	} else {
		echo "variabel ada";
	}
	
	echo "<br>";	
	$day = date("D");
	switch ($day) {
		case 'Sun':
			$hari = "minggu";
			break;
		case 'Mon':
			$hari = "senin";
			break;
		case 'Tue':
			$hari = "selasa";
			break;
		case 'Wed':
			$hari = "rabu";
			break;
		case 'Thu':
			$hari = "kamis";
			break;
		case 'Fri':
			$hari = "jum'at";
			break;
		case 'Sat':
			$hari = "sabtu";
			break;
		default:
			$hari = "libur";
			break;
	}
	echo "hari ini hari <br> $hari";




 ?>