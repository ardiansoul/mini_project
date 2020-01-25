<?php 
//membuat direktori
$dir = "images"; //nama direktori
// $cek = mkdir($dir);
// if ($cek) {
// 	echo "direktori $dir berhasil dibuat";
// } else {
// 	echo "direktori $dir tidak ada";
// }

// //hapus direktori
// $del = rmdir($dir);
// if ($del) {
// 	echo "direktori $dir berhasil dihapus";
// } else {
// 	echo "direktori $dir gagal dihapus";
//  }

if ($handle = opendir($dir)) {
	while (false !==($file = readdir($handle))) {
		if ($file != "." && $file !="..") {
			echo "$file<br>";
		}
	}
}
 ?>
