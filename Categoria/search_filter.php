<?php
require_once("../lib/functions.php") ;
get_search($connect);
$search = $_GET['search'];
error_reporting (0);
$_SESSION = login_mem();
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

                <h2>Filtro de busqueda</h2>
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
            <th>Categoria</th>
            <th>Status</th>
            <br>
        </thead>

        <tbody>
                <?php
                $query=mysqli_query($connect,"SELECT id, name, status FROM categories WHERE(id LIKE '%$search%' OR name LIKE '%$search%')");
                $result=mysqli_num_rows($query);
                if($result>0){
                while($fila = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $fila['id']?></td>
                    <td><?php echo $fila['name']?></td>
                    <td><?php echo $fila['status']?></td>
                    <td><a href=update.php?id=<?php echo $fila['id'] ?>>Editar</a></td>
                    <td><a href=delete.php?id=<?php echo $fila['id'] ?>>Eliminar </a></td>
                </tr>
                <?php
                }
                }
                ?>

        </tbody>
    </table>
</center>
</body>
</html>