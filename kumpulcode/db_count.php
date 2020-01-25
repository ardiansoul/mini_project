<?php 

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysql_connect($servername,$username,$password);
if (!$conn) {
	echo "koneksi gagal";
}


// $db = "create database count";

// if (mysql_query($db)) {
// 	echo "database created success";
// } else {
// 	echo "database creating error";
// }

// mysql_close($conn);


$db = "count";
// $select_db = mysql_connect($servername,$username,$password,$db);
// if ($select_db) {
// 	echo "database dipilih";
// } else {
// 	die(mysql_error());
// }

$sel_db = mysql_select_db($db);
if ($sel_db) {
 	echo "database dipilih2";
 } else {
 	die (mysql_error());
 }

// $create_partai = "
// CREATE TABLE tb_partai(
// id int(6) unsigned AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(30) NOT NULL
// )"; 
// $create_caleg ="
// CREATE TABLE tb_caleg(
// id int (6) unsigned AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(30) NOT NULL,
// id_partai int(6) REFERENCES tb_cilacap(id),
// earned_vote int(6) NOT NULL
// )";

// if (mysql_query($create_partai)) {
// 	echo "tabel partai sudah dibuat";
// } else {
// 	die(mysql_error());
// };

// if (mysql_query($create_caleg)) {
// 	echo "tabel caleg sudah dibuat";
// } else {
// 	die(mysql_error());
// }

// $input_partai = "INSERT INTO tb_partai (id,name) values ('1','Cilacap Santai')";

// $input_partai2 = "INSERT INTO tb_partai (id,name) values ('2','Cilacap Sejahtera')";

// if (!mysql_query($input_partai)) {
// 	echo "partai gagal di input";
// 	die(mysql_error());
// } elseif (!mysql_query($input_partai2)) {
// 	echo "partai 2 gagal di input";
// 	die(mysql_error());
// } else {
// 	echo "partai berhasil ditambahkan ";
// }

// $input_caleg = "INSERT INTO tb_caleg (id,name,id_partai,earned_vote) values ('1','Sera','2','100') ";
// $input_caleg2 = " INSERT INTO tb_caleg(id,name,id_partai,earned_vote) values ('2','Dobleh','1','99' ) ";

// if (!mysql_query($input_caleg)) {
// 	echo "caleg gagal di input";
// 	die(mysql_error());
// } elseif (!mysql_query($input_caleg2)) {
// 	echo "caleg 2 gagal di input";
// 	die(mysql_error());
// } else {
// 	echo "caleg berhasil ditambahkan";
// }

$select = "select * from tb_caleg";
$select2 = "select * from tb_partai";

$result_caleg = mysql_query($select);
$result_partai = mysql_query($select2);

if (mysql_num_rows($result_caleg) > 0) {
	while ($row = mysql_fetch_assoc($result_caleg)) {
		echo "nomor urut".$row['id']. " nama : ".$row['name']." dari partai ".$row['id_partai']." dengan vote ".$row['earned_vote'];
	} 
	}else {
		echo "tidak bisa menampilkan data";
		mysql_error();
}


// $input_partai = " INSERT INTO tb_partai(id, name) values('3', 'Cilacap Aman') ";

$alter = "UPDATE tb_partai SET name = 'Cilacap Makmur' WHERE name = 'Cilacap Sejahtera' ";

// if (mysql_query($input_partai)) {
// 	echo "berhasil";
// } else {
// 	die(mysql_error());
// }

if (mysql_query($alter)) {
	echo "berhasil";
} else {
	die(mysql_error());
}











 ?>