<?php 
include 'koneksi.php';
include 'sql.php';

$query = mysqli_query($conn,$sql_cat);
$Product_name = $Price = $Category = "";

 ?>


<!DOCTYPE html>
<html>
<head>
	<title> Add Product	</title>
</head>
<body>

	<h1>Tambah Product</h1>
	<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST"	class="form">
		<table>

		<tr>
		<td><label>Nama Produk</label>
		<td><input type="text" name="product">
		<tr>
		<td><label>Harga</label>
		<td><input type="number" name="cost">
		<tr>
			<td>Category</td>
		<td><select name="Category_id">
			<?php while ($row = mysqli_fetch_assoc($query)):?>
			
			<option value = "<?php echo $row['Category_id'] ?> "><?php  echo $row['Category_name'] ?></option>

			<?php endwhile ?>
		</select></td>
		<tr><td>
		<td><input type="submit" name="tambah_produk">
		</tr>
		</table>
	</form>
</body>
</html>

<?php 
if (isset($_POST['tambah_produk'])) {
	
$product_name = $_POST['product'];
$cost = $_POST['cost'];
$Category = $_POST['Category_id'];

$sql_add = "INSERT INTO `product_tb`(`Product_name`, `Price`, `Category_id`,`Cashier_id`) VALUES ('$product_name','$cost','$Category','1')";

$query = mysqli_query($conn,$sql_add);
if (!$query) {
	die(mysqli_error($conn));
} else {?>
	<h3>data barhasil di input</h3>
	<a href="<?php header("Location: view.php") ?>">kembali ke tampilan sebelumnya</a>
	<?php 
}

}


 ?>




<!-- <?php 



$sql = "INSERT INTO `product_tb`(`id`, `Name`, `Price`, `Category_id`, `Cashier_id`) VALUES ($id,$Name,'$Price,$Category_id,$Cashier_id)";
 ?> -->