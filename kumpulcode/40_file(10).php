<?php 
$file = "data.txt";
$filebaru = "databaru.txt";
$filebaru2 = "databaru2.txt";
if (copy($file, $filebaru)) { //mengcopy file
	echo "file $file berhasil dikop menjadi $filebaru";
}
if (rename($filebaru, $filebaru2)) { //mengubah nama file
	echo "file $filebaru berhasil di rename menjadi $filebaru2";
}
if (unlink($filebaru2)) { //menghapus file
	echo "file $filebaru2 berhasil dihapus";
}

 ?>