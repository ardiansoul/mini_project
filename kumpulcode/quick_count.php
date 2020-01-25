<?php 



// $select = " select * from tb_caleg ";


// if (mysql_num_rows($select)) {
// 	while (mysql_fetch_array($result)) {
		
// 	}
// }



// if (mysql_num_rows($result_caleg) > 0) {
// 	while ($row = mysql_fetch_assoc($result_caleg)) {
// 		echo "nomor urut".$row['id']. " nama : ".$row['name']." dari partai ".$row['id_partai']." dengan vote ".$row['earned_vote'];
// 	} 
// 	}else {
// 		echo "tidak bisa menampilkan data";
// 		mysql_error();
// }



 ?>




 <!DOCTYPE html>
 <html>
 <head>
 	<title>Quick Count</title>
 	<style type="text/css">
 		table, th, td {
 			border:1px solid black;
 			border-collapse: collapse;
 		}
 		th, td {
 			padding: 5px;
 			text-align: left;
 		}
 	</style>
 </head>
 <body>
 <h1>QUICK COUNT</h1>
 <table style="width: 100%">
 	<?php 

 	$servername = "localhost";
$username = "root";
$password = "";
$db = "count";

$conn = mysql_connect( $servername,$username,$password,$db );
$mydb =	mysql_select_db($db);
if (!$conn && !$mydb) {
	die(mysql_error());
}

 	$sql = "SELECT name, earned_vote FROM tb_caleg";

 	$query = mysql_query($sql);
 	if (!$query) {
 		die(mysql_error());
 	}
 	while ($row = mysql_fetch_assoc($query)) {
 		
 	 ?>

<tr>
	<td>nama_caleg : <?php $row['name'] ?></td>
	<td  style="text-align: center;"rowspan="2"><button><i>tambah</i></button>
	</td>
</tr>
<tr>
	<td>earned_vote : <?php $row["earned_vote"] ?></td>
	
</tr>
<?php } 
mysql_free_result($query);
mysql_close($conn);


?>

</table>

 </body>
 </html>