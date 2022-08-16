<?php
require_once("../lib/functions.php") ;
$_SESSION = login_mem();
$id = $_GET['id'];

delete_categorie($connect, $id);

header("Location: categorias.php");
?>