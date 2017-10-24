<?php
// Objective #2

$mysqli = new MySQLi("localhost", "root", "123", "phptest");
$list=mysql_query("SELECT * FROM mtcproducts ORDER BY product_variant_position ASC");
$product_name = $list.first["product_name"];
$product_id=$list.first["product_id"];

echo json_encode(array("data"=> mysql_fetch_array($list));
?>
