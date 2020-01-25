<?php 
$sql_view = "SELECT product_tb.id, Cashier_tb.Cashier_name,product_tb.Product_name, Category_tb.Category_name,product_tb.Price FROM product_tb INNER JOIN Cashier_tb ON product_tb.Cashier_id=Cashier_tb.Cashier_id LEFT JOIN Category_tb ON product_tb.Category_id = Category_tb.Category_id";

$sql_cat = "SELECT Category_id, Category_name FROM Category_tb";

?>