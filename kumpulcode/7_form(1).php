<?php 
	//FORM
	// ada 3 hal penting yang dibutuhkan dalam pembuatan FORM

	// 1. METHOD
	// METHOD didalam pembuatan form berguna untuk menentukan inputan form akan dikirim kemana.

	// 2. ACTION
	// ACTION menentukan dimana data inputan akan diproses, tag ACTION dapat dikosongkan jika form di proses ditempat yang sama dengan letak form

	// 3. SUBMIB BUTTON
	// SUBMIT BUTTON atau umumnya disebut tombol yang biasa digunakan sebagai trigger pengiriman data dari form inputan.

	// contoh penanganan form
	echo "CONTOH PENANGANAN FORM";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		contoh pengolahan form
 	</title>
 </head>
 <body>
 	<form action="" method="post" name="input">
 		nama anda : <input type="text" name="nama"><br>
 		<input type="submit" name="input" value="input">


 	</form>













 </body>
 </html>


 <?php 
if (isset($_POST['input'])) {
	$nama = $_POST['nama'];
	echo "nama anda adalah <b>$nama</b>";
}



 ?>