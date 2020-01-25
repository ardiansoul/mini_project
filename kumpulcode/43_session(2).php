<?php 
session_start();
if (isset($_SESSION['login'])) { //isset digunakan untuk memeriksa keberadaan variabel
 	echo "selamat datang" .$_SESSION['login']. "<h1>";
 	echo "halaman ini hanya bisa di akses jika anda sudah login";
 	echo "klik <a href='44_session(3).php'> disini 45_session(3).php</a> untuk logout";
 } else {
 	die("anda belum login <a href = '42_session.php> balik </a>");
 }
 ?>