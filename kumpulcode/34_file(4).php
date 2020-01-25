<?php 
$namafile = "data.txt";
$handle = fopen($namafile, "r");
if (!$handle) {
	echo "<b>file tidak ada</b>";
} else {
	$isi = fgets($handle, 2048);
	//fgets membaca file tiap baris
	$isi2 = fread($handle, 20);
	//fread membaca file tergantung length yang ada
	echo "isi = $isi<br>";
	echo "isi 2 = $isi2<br>";
}


 ?>