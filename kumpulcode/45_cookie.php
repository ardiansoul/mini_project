<?php 
$value = 'ardi';
$value2 = 'ardiyana saputra';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);

echo "ini halaman pengesetan cookie";
echo "klik <a href = '46_cookie(2).php'> disini </a> untuk memeriksa cookie";

 ?>