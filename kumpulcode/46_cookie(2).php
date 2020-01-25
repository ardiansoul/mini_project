<?php 
if (isset($_COOKIE['username'])) {
	echo "cookie 'username' ada isinya" . $_COOKIE['username'];
} else {
	echo "cookie 'username' tidak ada ";
}
if (isset($_COOKIE['namalengkap'])) {
	echo "cookie 'namalengkap' ada isinya" . $_COOKIE['namalengkap'];
} else {
	echo "cookie 'namalengkap' tidak ada";
}
echo "klik <a href = '45_cookie.php> disini </a> untuk membuat cookie";
echo "klik <a href = '46_cookie(3).php'";

 ?>