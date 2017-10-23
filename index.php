<?php

//Objective #1
/* create a connection */
$mysqli = new MySQLi("localhost", "root", "123", "phptest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$json = file_get_contents("input.json");
$json_a = json_decode($json, true);
$product = $json_a["product"];

$sql = array();
foreach( $product["variants"] as $variant ) {
    $sql[] = '('. $product['id'].',"'.$product['title'].'",'.$variant["id"].','.$variant["position"].',"'.$variant["title"].'")';
}
$mysqli->query('INSERT INTO mtcproducts (product_id, product_name, product_variant_id, product_variant_position,product_variant_color) VALUES '.implode(',', $sql));

$mysqli->close();
?>
