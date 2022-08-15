<?php
require_once("connect.php");

//FUNCIÓN DE ALL USERS//
function get_all_users($connect){
$consulta="SELECT id , names , email FROM users";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

//FUNCIÓN DE USUARIO SELECCIONADO//
function get_userselect($connect, $id){
    $consulta="SELECT * FROM users WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
    }

//FUNCIÓN DE ELIMINAR USUARIO//
function delete_user($id){
    global $connect;
    $consulta="DELETE FROM users WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta);
        //return $resultado;
    }

//FUNCIÓN DE ACTUALIZAR USUARIO//
Function update_user($names, $email, $password, $status, $id){
    global $connect;
    $consulta= "UPDATE users SET names='$names', email='$email', password='$password', status='$status' WHERE  id = $id";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}

//FUNCIÓN DE INICIO DE SESIÓN//
function login_mem(){
session_start();
if(!isset($_SESSION['user'])){
    echo '<center><h3>Por favor debe iniciar sesión para continuar<br>
    <a href="login.php">Inicia sesión</a></h3></center>';
    session_destroy();
    die();
}
}

//FUNCIÓN DE ORDEN DE NOMBRE DESCENDENTE//
function get_user_desc($connect){
    $consulta="SELECT * FROM users ORDER BY names DESC";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado; 
}

//FUNCIÓN DE ORDEN DE NOMBRE ASCENDENTE//
function get_user_asc($connect){
    $consulta="SELECT * FROM users ORDER BY names ASC";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado; 
}

//FUNCIÓN DE ORDEN DE EMAIL DESCENDENTE//
function get_email_desc($connect){
    $consulta="SELECT * FROM users ORDER BY email DESC";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado; 
}

//FUNCIÓN DE ORDEN DE EMAIL ASCENDENTE//
function get_email_asc($connect){
    $consulta="SELECT * FROM users ORDER BY email ASC";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado; 
}

//FUNCIÓN DE FILTRADO DE BÚSQUEDA//
    function get_search($connect){
        $search = strtolower($_REQUEST['search']);
        if(empty($search))
        {
            header('location:base.php');
        }
    }
?>