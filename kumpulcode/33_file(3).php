<?php 
$namafile = "data.txt";
$handle = fopen($namafile, "w");
if (!$handle) {
	echo "<b>file tidak bisadibuka</b>";
} else {
	fwrite($handle, "fakultas teknologi bandung\n");
	fputs($handle, "universitas budi luhur\n");
	//file_puts_contents ($namafile,"jakrta");
	echo "<b>file berhasil dibuka</b>";
}
fclose($handle);



 ?>