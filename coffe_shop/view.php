<?php 
include_once('koneksi.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Coffe Shop</title>
</head>
<body>

<div class="header">
	<h1>Coffeshop</h1>
	<a href="add.php">Add</a>

</div>

<table width="100%" style="text-align: center;">
	<tr>
	<th>no</th>
	<th>cashier</th>
	<th>product</th>
	<th>category</th>
	<th>cost</th>
	<th>action</th>
	</tr>

<?php include 'sql.php';
$query = mysqli_query($conn,$sql_view); ?>


	<?php if (mysqli_num_rows($query)>0): ?>
		
	<?php $no = 0;?>
	<?php while ($row = mysqli_fetch_assoc($query)): ?>
				<?php $no++?>
				<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $row['Cashier_name'] ?></td>
				<td><?php echo $row['Product_name'] ?></td>
				<td><?php echo $row['Category_name'] ?> </td>
				<td><?php $cost = $row['Price'];
$cost = "Rp.".number_format($cost);
echo $cost;
 ?></td>
				<td><button type="button" onclick="location.href='update.php?id=<?php
				 echo $row['id']?>'">update</button> || <button onclick="myFunction()" type="button">delete</button>
				 <script type="text/javascript">
				 	
				 	function myFunction() {
				 	if (confirm("Press a button!")) {
						   location.href="delete.php?id=<?php echo $row['id'] ?>"
						  } else {
						    window.alert("anda tidak menghapusnya")
						  }
				 	}
				 </script> 
				</td>
				</tr>

	<?php endwhile ?>
	<?php else: ?>
		<p>tidak ada data di tabel</p>
	<?php endif ?>




</table>
</body>
</html>


