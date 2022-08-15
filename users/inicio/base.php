<?php
require_once("../lib/functions.php");
//CREA UNA SESIÓN NUEVA//
$_SESSION = login_mem();
$users = get_all_users($connect);
$user_desc = get_user_desc($connect);
$user_asc = get_user_asc($connect);
$email_desc = get_email_desc($connect);
$email_asc = get_email_asc($connect);
error_reporting (0);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
</head>
<body>
<center> 

                <h2>REGISTRO DE USUARIOS</h2>
<div class="elem">
<table>
<thead>

    <form action="search_filter.php" method="get">
    <input type="text" name="search" placeholder="Filtrar búsqueda (id, nombres, correo electrónico)">
    <button type="submit">Buscar</button>
    </form>
    <br><br>
    <form action="base.php"  method="post">
        <select name="orden" id="orden">
        <option value="0">--> Ordenar nombre por id (por defecto)</option>
        <option value="1">Ordenar nombre alfabéticamente (A-Z)</option>
        <option value="2">Ordenar nombre alfabéticamente inverso (Z-A)</option>
        </select>
        <button type="submit">Ordenar</button>
            <?php $orden = $_POST['orden']; ?>
            <?php if ($orden == 0): 
            $userszeta = $users; 
            elseif ($orden == 1):            
            $userszeta = $user_asc; 
            elseif ($orden == 2): 
            $userszeta = $user_desc;
            endif; ?>
    </form>
    <br>
    <form action="base.php"  method="post">
        <select name="orden" id="orden">
        <option value="3">--> Ordenar correo por id (por defecto)</option>
        <option value="4">Ordenar correo alfabéticamente (A-Z)</option>
        <option value="5">Ordenar correo alfabéticamente inverso (Z-A)</option>
        </select>
        <button type="submit">Ordenar</button>
            <?php $orden = $_POST['orden']; ?>
            <?php if ($orden == 3): 
            $userszeta = $users; 
            elseif ($orden == 4):            
            $userszeta = $email_asc; 
            elseif ($orden == 5): 
            $userszeta = $email_desc;
            endif; ?>
    </form>
</div>
<br>
         <th>id</th>
         <th>Nombres</th>
         <th>Correo electrónico</th>
         <br>
</thead>

        <tbody>
            <?php
            while($fila = mysqli_fetch_array($userszeta))
            {
            ?>
            <tr>
                <td><?php echo $fila['id']?></td>
                <td><?php echo $fila['names']?></td>
                <td><?php echo $fila['email']?></td>


                <td><a href=base_update.php?id=<?php echo $fila['id'] ?>>Editar</a></td>
                <td><a href=delete.php?id=<?php echo $fila['id'] ?>>Eliminar usuario</a></td>
            </tr>
            <?php
            }
            ?>

        </tbody>
    </table>

    <br><br>
    <div class="elem">
    <h3><a href="menu.php">VOLVER AL MENÚ PRINCIPAL</a></h3>
   </div>

   <br>
    <div class="elem">
    <h3><a href="close_session.php">CERRAR SESIÓN</a></h3>
   </div>
</center>
</body>
</html>