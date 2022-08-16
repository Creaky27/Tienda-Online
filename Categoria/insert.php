<?php
require_once("../lib/functions.php");
$_SESSION = login_mem();
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
<h1>Categorias</h1>
<h4><small><a href="categorias.php">Regresar</a></small></h4>
<form action="insert_query.php" method="post">    
    <div class="datos-categorias">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="categoria" name="name" id="name" >
    </div>
    <br>
    <div class="datos-categorias">
        <label for="estatus">Estatus:</label>
        <input type="text" placeholder="estatus" name="status" id="status" >
    </div>
    <br>
    <div class="datos-categorias">
        <label for="user_id">User ID:</label>
        <input type="text" placeholder="user" name="user_id" id="user_id" >
    </div>
    <br>
    <div>
        <label for="categoria"></label>
        <input type="submit" name="submit" value= "Anexar">
    </div>
</form>
</body>
</html>