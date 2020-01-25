<?php 
// array
// variabel yang dapat memiliki banyak nilai
//array dapat menyimpan tipe data yang berbeda

// membuat array
// cara lama
$hari = array("senin","selasa","rabu");
// cara baru
$bulan = ['januari','februari','maret'];

// cara menampilkan array
// var_dump($bulan);

// echo "<br>";

// print_r($hari);
// echo "<br>";

// cara menampilan 1 element pada array
echo $bulan[1];
$bulan[] = "april";
$bulan[] = "mei";
echo "<br>";
var_dump($bulan);

//penulangan para array
// for foreach

$angka = [3,2,4,6,1,4,2,6,19];
?>

<!DOCTYPE html>
<html>
<head>
	<title>array</title>
	<style>
		.kotak{
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;

		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php 
for ($i=0; $i < count($angka); $i++) {

	 ?>
<div class="kotak"><?php echo $angka[$i]; ?>
</div>
<?php } ?>


<div class="clear"></div>
<?php foreach ($angka as $a) {?>
	<div class="kotak"><?php echo $a; ?></div>
<?php } ?>


<div class="clear"></div>
<?php foreach ($angka as $a) :?>
	<div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>
</body>
</html>