<?php

require_once ("../../lib/functions.php");
//Validacion//
$_SESSION= login_mem();

$id = $_GET ["id"];

delete_products($connect,$id);

header("Location: all_products.php");

?>