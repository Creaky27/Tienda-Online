<?php
//CREA UNA SESIÓN NUEVA//
    session_start();

//DESTRUYE LA SESIÓN//
    session_destroy();
    header("Location: login.php");
?>