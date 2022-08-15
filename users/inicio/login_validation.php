<?php 
require_once("../lib/connect.php");


$email = $_POST['email'];
$password = $_POST['password'];

//VALIDA EL INICIO DE SESIÓN COMPROBANDO EMAIL Y PASSWORD//
$verify = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' and password='$password'");

if(mysqli_num_rows($verify) > 0 ){
    
//CREA UNA SESIÓN NUEVA//
session_start();

    //ALMACENA LOS DATOS DE LA SESION EN user//
    $_SESSION['user']= $email;
    header("Location:menu.php");
    exit(); //<----  FINALIZA LA EJECUCIÓN ACTUAL - ESTE ES SIMILAR AL DIE//

}else{

    //MUESTRA MENSAJE DE ERROR MEDIANTE UNA VENTANA//
    echo '<center><h3>Correo o contraseña incorrectos <br>
    <a href="login.php">inicia sesion</a></h3></center>';
    exit();
}

?>