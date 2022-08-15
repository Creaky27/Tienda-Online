<?php

require_once("../../lib/functions.php");

//Validacion//
$_SESSION= login_mem();

$id = $_GET['id'];
$resultado = get_products($connect,$id);
$products = mysqli_fetch_array($resultado);


?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detalles JUANSTORE</title>
</head>

<body>
    <h1 align="center" ><?php echo $products['name']?>´s details <small> 
        <a href = "/products/stores/juan/indexj.php">Back</a></small></h1>
        <table align="center">
            <thead>    
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>User_id</th>
                <th>Category_id</th>


        </tr>
    </thead>
    <tbody>
   

        <tr align="center">
        
            <td><?php echo $products ['id']; ?></td>
            <td><?php echo $products ['name']; ?></td>
            <td><?php echo $products ['description']; ?></td>
            <td><img height= "200px" src='../../products/image/<?php echo $products["image"]?>'></td>
            <td><?php echo $products ['price']; ?></td>
            <td><?php echo $products ['quantity']; ?></td>
            <td><?php echo $products ['status']; ?></td>
            <td><?php echo $products ['user_id']; ?></td>
            <td><?php echo $products ['category_id']; ?></td>
        
        </tr>
      
    </tbody>
    </table>

</body>
</html>