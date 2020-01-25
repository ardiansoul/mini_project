<?php 
$namafile = "data.txt";
$handle = fopen($namafile, "w");
if (!$handle) {
	echo "<b>file tidak ada</b>";
} else {
	"<b>file ada</b>";
}

fclose($handle);


 ?>