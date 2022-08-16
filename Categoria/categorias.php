<?php
require_once("../LIB/functions.php");

?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Categorias</title> 
</head>
<center>
    <body>
        <h1>Todas las Categorías</h1>
        <div>
	<form action="search_filter.php" method="get">
        <input type="text" name="search" placeholder="Filtrar búsqueda">
        <button type="submit">Buscar</button>
        </form>
        </div>

        <?php 
        
                if(isset($_GET['order'])){
                $order = $_GET['order'];
                }else{
                        $order = 'name';
                }
                if(isset($_GET['sort'])){
                        $sort = $_GET['sort'];
                }else{
                        $sort = 'ASC' ;
                }

    	       categorie_table($order , $sort); 
        ?>
        
        <h4><small><a href="insert.php">Agregar Categoria</a></small></h4>
        <h4><small><a href="categorias.php">Regresar</a></small></h4>

        </body>
</center>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="../LIB/functions.js"></script>
</html>