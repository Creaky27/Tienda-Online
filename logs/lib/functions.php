<?php

require_once("connect.php");
function get_all_logs($connect){
$consulta = "SELECT * FROM logs";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

?>