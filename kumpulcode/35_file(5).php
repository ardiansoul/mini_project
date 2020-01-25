<?php 
$namafile = "data.txt";
$handle = fopen($namafile, "r");
if (!$handle) {
	echo "<b>file tidak ada</b>";
} else {
	echo "<b>isi fole = </b><br>";
	//menampilkian seluruh isi file 
	while ($isi = fgets ($handle,2048)) {
		// fgets menampilkan isi perbaris
		// while menampilkan isi file sesuai pengulangan yang ada
		echo "$isi<br>";
	}
}




 ?>