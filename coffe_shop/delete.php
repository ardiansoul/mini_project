<?php 
include_once('koneksi.php');

$sql = "DELETE FROM product_tb WHERE id =".$_GET['id'];

$query = mysqli_query($conn,$sql);
if (!$query) {
 	die(mysqli_error($conn));
 } 
 ?><a href="view.php">kembali</a>
