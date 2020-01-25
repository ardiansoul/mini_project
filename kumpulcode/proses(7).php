<?php 
if (isset ($_POST ['submit'])) {
	$dir_upload = "images/";
	$nama_file = $_FILES ['file']['name'];

	if (is_uploaded_file($_FILES ['file']['tmp_name']))//is_uploaded_file digunakan untuk mengupload file ke tmp
	  {
		$cek = move_uploaded_file($_FILES ['file']['tmp_name'], $dir_upload.$nama_file);//dan move_uploaded_file berguna untuk memindakan file dari tmp ke file yang diinginkan
		if ($cek) {
			die ("file berhasil diupload");
		} else {
			die ("file gagal di upload");
		}
		
	}
}

 ?>