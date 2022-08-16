<?php
require_once("connection.php");

function categorie_table($order , $sort){
    $mysqli = NEW MySQLi('eloriginalqroo.com', 'elorigin_unid', 'Elorigin.2022!', 'elorigin_unid');
    $resultSet = $mysqli->query("SELECT * FROM categories ORDER BY $order $sort");

    if($resultSet->num_rows > 0){
        $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC' ;

        echo"
        
        <table border='2'>
        <thead>
                <tr>
                <th><a href='?order=id&&sort=$sort'>ID↑↓</a></th>
                <th><a href='?order=name&&sort=$sort'>Nombre↑↓</a></th>
                <th> Status </th>
                </tr>
        </thead>
        ";
        while($rows = $resultSet->fetch_assoc())
        {
                $getID = $rows['id'];
                $sort = $rows['name'];
                $getStatus = $rows['status'];
                if($getStatus == 1){
                        $getStatus = 'Disponible' ;
                } else {
                        $getStatus = 'Agotado' ;
                }
                
                
                echo"
                        <tr>
                        <td> $getID </td>
                        <td> <a href= '#'> $sort </a></td>
                        <td> $getStatus </td>
                        <td> <a href= 'update.php?id=$getID'>Editar</a></td>
                        <td> <a href= 'delete.php?id=$getID'>Eliminar</a></td>
                        </tr>
                ";
        }
        echo "
        </table>
        ";
    }else{
        echo "No records returnes.";
    }
}

function get_all_categories($connect){
    $consulta = "SELECT * FROM categories";
    $resultado = mysqli_query($connect,$consulta);
    return $resultado;
}
function get_categorie($connect, $id){
    $consulta = "SELECT * FROM categories WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}

function insertar_categorie($name, $status, $user_id){
    global $connect;
    $consulta = "INSERT INTO categories (name, status, user_id) values ('$name', '$status', '$user_id')";
    $resultado = mysqli_query($connect, $consulta);
}
function update_categorie($name, $status, $user_id, $id){
    global $connect;
    $consulta = "UPDATE categories SET name='$name', status='$status', user_id='$user_id' WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}

function delete_categorie($connect, $id){
    global $connect;
    $consulta = "DELETE FROM categories WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta);
}

function get_search($connect){
    $search = strtolower($_REQUEST['search']);
    if(empty($search))
    {
        header('location:categorias.php');
    }
}

function login_mem(){
    session_start();
    if(!isset($_SESSION['user'])){
        echo '<center><h3>Por favor debe iniciar sesión para continuar<br>
        <a href="../../login.php">Inicia sesión</a></h3></center>';
        session_destroy();
        die();
    }
    }
?>
