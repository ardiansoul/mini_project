<?php 
include 'koneksi.php';
include 'sql.php';

$query = mysqli_query($conn,$sql_cat);


 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>update</title>
 </head>
 <body>
 	<h1>Update Product</h1>
 	<p>mengedit produk <?php echo $_GET['id']; ?></p>
 	<form action="" method="POST">
 <table>

		<tr>
		<td><label>Nama Produk</label>
		<td><input type="text" name="product_name">
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
		<td><input type="submit" name="update_produk" value="update">
		</tr>



 </table>
 </form>
 </body>
 </html>

<?php 

if (isset($_POST['update_produk'])) {

	$Product_name = $_POST['product_name'];
	$cost = $_POST['cost'];
	$Category = $_POST["Category_id"];
	$id = $_GET['id'];


$sql = "UPDATE `product_tb` SET `Product_name`= '$Product_name',`Price`= '$cost',`Category_id`= '$Category' WHERE id = $id ";

if (!$query = mysqli_query($conn,$sql)) {
	die(mysqli_error($conn));
} else {
	header("Location: view.php");
}

}



 ?>


