<?php

require_once ("../../lib/functions.php");
//Validacion//
$_SESSION= login_mem();

$name= $_POST ["name"];

$description = $_POST ["description"];

$image = $_POST ["image"];

$price = $_POST ["price"];

$quantity = $_POST ["quantity"];

$status = $_POST ["status"];

$user_id = $_POST ["user_id"];

$category_id = $_POST ["category_id"];

insert_products($name,$description,$image,$price,$quantity,$status,$user_id,$category_id);

header("Location: all_products.php");

?>