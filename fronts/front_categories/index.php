<?php

$user_id=$_GET["user_id"];
require_once("../lib/functions.php");
$resultado = get_all_users($connect);
$user = mysqli_fetch_array($resultado);
$category = get_categories($connect, $user_id);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../style.css"> 
</head>
<body>

<!-- la barra de navegacion para regresar al main y categories -->
<nav class="navbar sticky-top" style="background-color: #483d8b;">
  <div class="container-fluid">
    <a class="navbar-brand" href="../front_users/index.php">Menu</a>
  </div>
</nav>

    <!--aqui se debe hacer un echo de la categoria -->
     <h1 align="center">Catalogo</h1> 

    <div class= "text_center"> <!-- el div center termina en la linea 22 -->
    <hr align="center" ="400" width="70%" color="#800080" id="lineacolor">
    </div>

        <!--"CATALOGO de los productos mediante Cards" -->
    <p align="center">bienvenido al catalogo</p>

    <div class="container">
    <div class="row">
    <?php
        while ($fila = mysqli_fetch_array($category)) {
    ?>


        <div class="card">
            <br>
            <h5 class="card-title"><?php echo $fila["name"]; ?></h5>  
             <p class="card-text">
                <?php if ( $fila["status"] == 1 ): ?>

                    <p class="card-text"> <small>  <a href="../front_products/?user_id=<?php echo $user_id ?>&category_id=<?php echo $fila
         ["id"]; ?>">Ver productos</a>  </small> </p>

  

                <?php elseif ( $fila["status"] == 0 ): ?>
                    <h6 class=out >en mantenimiento </h6>
                <?php endif; ?>
             </p>
             
            </div>
    <br>
    <?php
    }
    ?>
            <div class="col-m-6">
</div>
</div>
</div>
    

</body>
</html>