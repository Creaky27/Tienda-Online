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
    <br><br><br><br>
        <div class="elem">
    
             <H1>¡Bienvenido al menú de eloriginal-unid!</H1>

        </div>
        <br><br><br><br>
         <div class="elem">
    
             <H2><a href="base.php">IR A USUARIOS</a></H2>
    
         </div>
         <br><br><br><br>

         <div class="elem">
             <H2><a href="#">IR A CATEGORÍAS</a></H2>
         </div>
         <br><br><br><br>

         <div class="elem">
             <H2><a href="../../products/index.php">IR A PRODUCTOS</a></H2>
         </div>
         <br><br><br><br>

         <div class="elem">
             <H2><a href="../../fronts/front_users/index.php">IR A FRONTS</a></H2>
         </div>
    </center>
</body>
</html>