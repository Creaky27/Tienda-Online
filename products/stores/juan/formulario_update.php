<?php
require_once("../../lib/functions.php");

//Validacion//
$_SESSION= login_mem();

$id = $_GET['id'];
$resultado = get_products($connect,$id);

$users = mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>

<body align= "center">

<h1>Update products <small><a href="indexj.php">Back</a> </small></h1>

<form action= "update_query.php" method="post">
    

<class= "elem-group">

<label for="name">name</label> <br>
<input type="text" id= "name" name= "name" placeholder = "introduzca su nombre" value ="<?php echo $users['name']; ?>">
<input type="hidden" id= "id" name= "id" value ="<?php echo $users['id']; ?>">
<br><br><br>

<label for="description">description</label> <br>
<input type="text" id= "description" name= "description" placeholder = "introduzca su description"value ="<?php echo $users['description']; ?>">
<br><br><br>

<label for="image">image</label> <br>
<input type="file" id= "image" name= "image" placeholder = "introduzca su image"value ="<?php echo $users['image']; ?>">
<br><br><br>

<label for="price">price</label> <br>
<input type="text" id= "price" name= "price" placeholder = "introduzca su price"value ="<?php echo $users['price']; ?>">
<br><br><br>

<label for="quantity">quantity</label> <br>
<input type="text" id= "quantity" name= "quantity" placeholder = "introduzca su quantity"value ="<?php echo $users['quantity']; ?>">
<br><br><br>

<label for="status">status</label> <br>
<input type="text" id= "status" name= "status"value ="<?php echo $users['status']; ?>">
<br><br>

<label for="user_id">user_id "1"</label> <br>
<input type="text" id= "user_id" name= "user_id"value ="<?php echo $users['user_id']; ?>">
<br><br>


<label for="category_id">category_id<br>enlatados"1"  limpieza "2"  bebibles "3"</label> <br>
<input type="text" id= "category_id" name= "category_id"value ="<?php echo $users['category_id']; ?>">
<br><br>


<input type="submit">

</form>

</body>
</html>