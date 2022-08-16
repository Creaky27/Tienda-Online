<?php
require_once("../lib/functions.php");

$name = $_POST['name'];
$status = $_POST['status'];
$user_id = $_POST['user_id'];
$id = $_POST['id'];

update_categorie($name, $status, $user_id, $id);

header("location: categorias.php");
?>