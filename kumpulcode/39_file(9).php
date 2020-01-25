<?php 
$file = "data.txt";

if (is_file($file)) {
	echo "file $file adalah file<br>";

	if (is_executable($file)) {
		echo "file $file dapat dijalankan<br>";
	} else {
		echo "file $file tidak dapat dijalanakan<br>";
	}
	if (is_writable($file)) {
		echo "file $file bisa ditulis<br>";
	} else {
		echo "file $file tidak bisa ditulis<br>";
	}
	if (is_readable($file)) {
		echo "file $file bisa dibaca<br>";
	} else {
		echo "file $file tidak bisa dibaca<br>";
	}
	echo "file $file terakhir di akses pada ".date("d-m-Y H:i:s". fileatime($file))."<br>";
}


 ?>