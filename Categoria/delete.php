<?php
require_once("../lib/functions.php") ;

$id = $_GET['id'];

delete_categorie($connect, $id);

header("Location: categorias.php");
?>