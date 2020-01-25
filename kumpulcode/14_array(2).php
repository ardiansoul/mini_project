<?php 
$arrnilai = array('ani' => 80, 'nani' => 70, 'ana' => 78);
echo "menampilkan isi foreach : <br>";
foreach ($arrnilai as $nama => $nilai) {
	echo "nilai $nama = $nilai<br>";
}
reset($arrnilai);
echo "<br>menampilkan isi array while dan list : <br>";
while (list($nama,$nilai) = each($arrnilai)) {
	echo "<br>nilai $nama = $nilai";
}


 ?>