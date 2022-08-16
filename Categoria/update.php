<?php
require_once("../lib/functions.php");
$_SESSION = login_mem();
$id = $_GET['id'];
$resultado = get_categorie($connect, $id);
$categoria = mysqli_fetch_array($resultado);
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
<h1>Actualice datos de Categorias</h1>
<h4><small><a href="categorias.php">Regresar</a></small></h4>
<form action="update_query.php" method="post">    
    <div class="datos-categorias">
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="categoria" name="name" id="name" value = "<?php echo $categoria['name']; ?>">
        <input type="hidden" name="id" id="id" value= "<?php echo $categoria['id']; ?>">
    </div>
    <br>
    <div class="datos-categorias">
        <label for="estatus">Estatus:</label>
        <input type="text" placeholder="estatus" name="status" id="status" value = "<?php echo $categoria['status']; ?>">
    </div>
    <br>
    <div class="datos-categorias">
        <label for="user_id">User ID:</label>
        <input type="text" placeholder="user" name="user_id" id="user_id" value = "<?php echo $categoria['user_id']; ?>">
    </div>
    <br>
    <div>
        <label for="categoria"></label>
        <button type="submit" name="submit">Cambiar</button>
    </div>
</form>
</body>
</html>