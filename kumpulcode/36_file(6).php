<?php 
$namafile = "data.txt";
$handle = @fopen($namafile, "r");
if ($handle) {
	while (!feof($handle))
	//eof berfungsi untuk memeriksa pointer file apakah sudah berada di bawah atau belum {
		$buffer = fgets($handle,2048);
		echo $buffer."<br>";
	}
	fclose($handle);
}





 ?>