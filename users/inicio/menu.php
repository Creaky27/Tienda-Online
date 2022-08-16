<?php
require_once("../lib/functions.php");
//CREA UNA SESIÓN NUEVA//
$_SESSION = login_mem();
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida elorigin_unid</title>
</head>
<body>
    <center>
    <br><br>
        <div class="elem">
    
             <H1>¡Bienvenido al menú de eloriginal-unid!</H1>

        </div>
        <br><br>
        <div class="elem">
             <H2><a href="../../logs/logs/index.php">IR A LOGS</a></H2>
        </div>
        <br><br>
        <div class="elem">
    
            <H2><a href="base.php">IR A USUARIOS</a></H2>
    
        </div>
        <br><br>

        <div class="elem">
            <H2><a href="../../categoria/categorias.php">IR A CATEGORÍAS</a></H2>
        </div>
        <br><br>

        <div class="elem">
            <H2><a href="../../products/index.php">IR A PRODUCTOS</a></H2>
        </div>
        <br><br>

        <div class="elem">
            <H2><a href="../../fronts/front_users/index.php">IR A FRONTS</a></H2>
        </div>

        <br><br><br>
    <div class="elem">
    <h3><a href="close_session.php">CERRAR SESIÓN</a></h3>
    </div>
    </center>
</body>
</html>
