<?php
require_once("../lib/functions.php");

$name = $_POST['name'];
$status = $_POST['status'];
$user_id = $_POST['user_id'];

insertar_categorie($name, $status, $user_id);


header("location: categorias.php");
?>