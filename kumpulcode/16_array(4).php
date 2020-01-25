<?php 
echo "menggunakan fungsi pengurutan array";

$arrnilai = array('ani' => 100, 'budi' => 94, 'citra' => 90, 'dedi' => 95, 'erwin' => 99, 'fikri' => 98);
//arsort mengurutkan array berdasarkan value secara descending
echo "<br>";
arsort($arrnilai);
print_r($arrnilai);
echo "<br>";
//asort mengurutkan array berdasarkan value secara ascending
asort($arrnilai);
print_r($arrnilai);
echo "<br>";
//krsort mengurutkan array berdasarkan index/key secara descending
krsort($arrnilai);
print_r($arrnilai);
echo "<br>";
//rsort mengurutkan array berdasarkan value secara descending dengan mengubah index/key
rsort($arrnilai);
print_r($arrnilai);
echo "<br>";
//sort mengurutkan array berdasarkan value secara ascending dengan mengubah index/key
sort($arrnilai);
print_r($arrnilai);
echo "<br>";
//shuffle mengubah urutan array secara random
shuffle($arrnilai);
print_r($arrnilai);
echo "<br>";









 ?>