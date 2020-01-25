<?php 
//penanganan file
//membuka dan membuat file
$namafile = "data.txt";
$handle = fopen($namafile, "r");
if (!$handle) {
	echo "<b>file tidak ada</b>";
} else {
	echo "<b>file ada</b>";
}





 ?>