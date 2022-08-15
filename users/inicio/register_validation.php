<?php 
require_once("../lib/connect.php");

$names = $_POST['names'];
$email = $_POST['email'];
$password = $_POST['password'];
$consulta = "INSERT INTO users(names,email,password) VALUES ('$names','$email','$password')";


//VERIFICA QUE EL CORREO NO SE REPITA EN EL REGISTRO//
$verify = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' ");
if(mysqli_num_rows($verify) >0 ){
    echo '<center><h3>Este correo ya está registrado, introduce uno distinto<br>
    <a href="register.php">Reintentar</a></h3></center>';
    exit();
}

//REGISTRA NUEVO USUARIO DESPÚES DE HABER VALIDADO//
$resultado = mysqli_query($connect, $consulta);
if($resultado){
    echo '<center><h3>Usuario registrado exitosamente<br>
    <a href="login.php">Inicia sesión</a></h3></center>';

}else{
    echo '<center><h3>Ha ocurrido un error al momento de registrarse<br>
    <a href="register.php">Reintentar</a></h3></center>';
    exit();
}
?>