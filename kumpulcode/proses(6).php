<?php 
if (isset($_POST['pilih'])) {
 	$jurusan = $_POST['jurusan'];
 	$jurusan2 = $_POST['jurusan2'];
 	echo "jurusan mu adalah " .$jurusan;
 	echo "<br> jurusan cadangan mu adalah" . $jurusan2;
 } ?>