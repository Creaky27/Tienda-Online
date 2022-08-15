<?php
require_once("../../lib/functions.php");

//Validacion//
$_SESSION= login_mem();

?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario insert</title>
</head>

<body align = "center">

<h1>Insert product <small><a href="indexj.php">Back</a></small></h1>

<form action= "insertjuan.php" method="post">
    

<class= "elem-group">

<label for="name">name</label> <br>
<input type="text" id= "name" name= "name" placeholder = "introduzca el nombre del producto">
<br><br><br>

<label for="description">description</label> <br>
<input type="text" id= "description" name= "description" placeholder = "introduzca la descripcion">
<br><br><br>

<label for="image">image</label> <br>
<input type="file" id= "image" name= "image" placeholder = "introduzca su imagen">
<br><br><br>

<label for="price">price</label> <br>
<input type="text" id= "price" name= "price" placeholder = "introduzca su precio">
<br><br><br>

<label for="quantity">quantity</label> <br>
<input type="text" id= "quantity" name= "quantity" placeholder = "introduzca su cantidad">
<br><br><br>

<label for="status">status</label> <br>
<input type="text" id= "status" name= "status" placeholder = "introduzca su status">
<br><br><br>

<label for="user_id">user_id "1"</label> <br>
<input type="text" id= "user_id" name= "user_id" placeholder = "1">
<br><br>

<label for="category_id">category_id<br>enlatados"1"  limpieza "2"  bebibles "3"
</label> <br>
<input type="text" id= "category_id" name= "category_id" placeholder = "introduzca su category_id">
<br><br><br>



<input type="submit">

</form>

</body>
</html>