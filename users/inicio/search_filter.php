<?php
require_once("../lib/functions.php");
//CREA UNA SESIÓN NUEVA//
$_SESSION = login_mem();
$users = get_all_users($connect);
$user_desc = get_user_desc($connect);
$user_asc = get_user_asc($connect);
get_search($connect);
$search = $_GET['search'];
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
    <input type="text" name="search" placeholder="Filtrar búsqueda (id, nombres, correo electrónico)" value="<?php echo $search; ?>">
    <button type="submit">Buscar</button>
    </form> 
    <br>
</div>
         <th>id</th>
         <th>Nombres</th>
         <th>Correo electrónico</th>
         <br>
</thead>

        <tbody>
            <?php
            $query=mysqli_query($connect,"SELECT id, names, email FROM users WHERE(id LIKE '%$search%' OR names LIKE '%$search%' OR email LIKE '%$search%')");
            $result=mysqli_num_rows($query);
            if($result>0){
            while($fila = mysqli_fetch_array($query)){
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
            }
            ?>

        </tbody>
    </table>

    <div class="elem">
    <h3><a href="close_session.php">CERRAR SESIÓN</a></h3>
   </div>
</center>
</body>
</html>