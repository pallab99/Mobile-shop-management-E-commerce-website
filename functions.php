<?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

// require Cart Class
require ('database/Cart.php');


// DBController object
$db = new DBController();

// Product object
$product = new Product($db);  /* jehetu amra DBcontroller ke argument hisabe pass korsilam tai amra ai product calss ar new Product obj a ($db ) pass korsi */
$product_shuffle = $product->getData(); // we can acces every where

// Cart object
$Cart = new Cart($db );// pass dependance injection
