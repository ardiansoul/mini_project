<!DOCTYPE html>
<html>
<head>
	<title>pengunjung ke - <?php  echo $counter; ?></title>
</head>
<body>
	<h2>anda sedang berkunjung ke perpustakaan</h2>
	<pre>
		<form action="" method="POST" name="input">
			masukan nama anda
			<input type="text" name="nama">
			<input type="submit" name="input" value="submit">
		</form>
	</pre>
	<?php 
	$input = $_POST ['nama'] ?>
	<?php 
	$counter_file = "counter(2).txt";
	if (!file_exists($counter_file)) {
		fopen($counter_file, "w");
	}
	$file = fopen($counter_file, "r");
	$counter = fread($file, 10);

	if ($input != false)
		{$counter++;
	echo "selamat datang $input";
	echo "<br>anda pengunjung ke - $counter";
	$file = fopen($counter_file, "w");
	fwrite($file, $counter);
	fclose($file);
}
	 ?>
</body>
</html>