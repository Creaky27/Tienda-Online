<?php
require_once("../lib/functions.php");
//CREA UNA SESIÓN NUEVA//
$_SESSION = login_mem();

$id = $_GET['id'];
$resultado = get_userselect($connect, $id);
$users = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de usuarios</title>
</head>

<body>
    <center><h1>Editar datos de usuario</h1> <a href="base.php"><h3>Regresar a base</h3></a></center>
<center>

        <form action="update_query.php" method="POST">

              <div class="elem">
                <label for="names">Nombre:</label><br><br>
                <input type="text" name="names" value="<?php echo $users['names']; ?>"/>
                <input type="hidden" name="id" value="<?php echo $users['id']; ?>"/>
              </div>

              <div class="elem">
              <br><label for="email">Correo electrónico:</label><br><br>
                <input type="text" name="email" value="<?php echo $users['email']; ?>"/>
              </div>

              <div class="elem">
              <br><label for="password">Password:</label><br><br>
                <input type="text" name="password" value="<?php echo $users['password']; ?>"/>
              </div>

              <div class="elem">
              <br><label for="status">Status:</label><br><br>
                <input type="text" name="status" value="<?php echo $users['status']; ?>"/>
              </div>



              <br><br>
              <button type="submit" name="submit">ACTUALIZAR DATOS</button>
        </form>

</center>
</body>
</html>