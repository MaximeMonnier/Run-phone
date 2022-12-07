<?php
 //require MySQL Connection
 require 'database/DBControler.php';

  //require Product Class
  require 'database/Product.php';


 //DBController object
 $db = new DBController();

 //product object

 $product = new Product($db);

print_r($product->getData());