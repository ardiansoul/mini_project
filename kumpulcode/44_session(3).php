<?php 
session_start();
if (isset ($_SESSION['login'])) {
	unset($_SESSION);// digunakan untuk menghilangkan variabel
	session_destroy();//digunakan untuk menghapus semua data yang berhubungan dengan session tersebut
	echo "anda berjasil logoit";
	echo "klik <a href ='42_session.php'>disini </a> untuk login kembali ";
	echo "<h3>anda tidak masuk ke halaman login <a href = '43_session(2).php";
}


 ?>