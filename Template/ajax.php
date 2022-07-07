<?php

// require MySQL Connection for acess in db
require ('../database/DBController.php');

// require Product Class
require ('../database/Product.php'); // path for this absulte file

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);

if (isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']); // using itemid we get data from product table and strore it on $result
    echo json_encode($result); // reslut aj json obj
}