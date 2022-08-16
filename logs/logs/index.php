<?php
require_once("C:/xampp/htdocs/elorigin_unid/lib/functions.php");
$logs = get_all_logs($connect)
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elorigin_unid | logs </title>
</head>
<body>
<h1><center> logs </center></h1>
<h4><center><a href="../../users/inicio/menu.php"> Regresar </a></center></h4>
<center>
    <form action="busqueda_index.php" method="post">
        <input type="text" name="busqueda" placeholder="buscar para ver tabla de logs" id="busqueda">
        <input type="submit" name="Buscar" value="Buscar">
    </form>
    <form action="consulta_fecha.php" method="get">
                <input type="date" name="desde" placeholder="fecha inicial">
                <input type="date" name="hasta" placeholder="fecha final"> <br>
                <input type="submit" name="enviar" value="Buscar">
            </form>
    <table border CELLPADDING=10>
        <thead>
            <tr>
                <th> description </th>
                <th> event </th>
                <th> module </th>
                <th> fecha</th>
</thead>
</tr>
<tbody>
</center>
    <?php
    while ($fila = mysqli_fetch_array($logs)){
        ?>
        <tr>
            <td><?php echo $fila ["description"]; ?> </td>
            <td><?php echo $fila ["event"]; ?> </td>
            <td><?php echo $fila ["module"]; ?> </td>
            <td><?php echo $fila ["fecha"]; ?> </td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</body>
</html>
