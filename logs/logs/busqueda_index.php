<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
</head>
<body>
<form>
<center>
<h1><center> Logs / busqueda </center></h1>
<h4><center><a href="index.php"> Regresar </a></center></h4>
<center>
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
require_once("../lib/connect.php");
if(isset($_POST['$Buscar'])){
}else{
$busqueda = $_POST['busqueda'];

$consulta ="SELECT * FROM logs WHERE event LIKE '%$busqueda%' ";
$resultado =mysqli_query($connect,$consulta);
while($fila=mysqli_fetch_array($resultado)){
    ?>
 <tr>
            <td><?php echo $fila ["description"]; ?> </td>
            <td><?php echo $fila ["event"]; ?> </td>
            <td><?php echo $fila ["module"]; ?> </td>
            <td><?php echo $fila ["fecha"]; ?> </td>
    </tr><?php
}
}
?>
</form>
</body>
</html>
