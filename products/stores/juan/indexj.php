<?php

require_once ("../../lib/functions.php");

//Validacion//
$_SESSION= login_mem();

$products = get_juan_products($connect);

//names filtros//
$a_z =juan_az($connect);
$z_a =juan_za ($connect);

//precio filtros//
$pr_asc  =juan_price_asc($connect);
$pr_desc =juan_price_desc($connect);

//quantity filtros//
$quan_asd=juan_quantity_asc($connect);
$quan_desc=juan_quantity_desc($connect);

error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS JUANSTORE</title>
</head>
<body>

<h1 align="center">PRODUCTS JUANSTORE <small><a href="../../index.php">Back</a>
<br> <a href = "/products/stores/juan/formulario_insertjuan.php">Insert Product </a></small></small></h1>

<table align="center">
<thead>
            <tr>
                <th>ID</th>
                <th>name
                    <small>
                     <form method="post" >
                        <select name="orden" id="orden">
                           <option value="0">Default</option>
                           <option value="1">A-Z </option>
                           <option value="2">Z-A</option>
                        </select>
                        <input type="submit" value="orden">
                        <?php
                           $orden = $_POST ["orden"];
                        ?>
                        <?php 
                            if ($orden == 0): 
                            $type_orden = $products; 
                            elseif ($orden == 1):            
                            $type_orden = $a_z; 
                            elseif ($orden == 2): 
                            $type_orden = $z_a; 
                            endif; 
                        ?>
                     </form>   
                    </small>
                </th>
                <th>Category </th>
                <th>Description</th>
                <th>Price 
                    <small>
                        <form action= "../juan/indexj.php" method="post">
                        <select name="price" id="price">
                           <option value="3" selected >Default</option>
                           <option value="4">Mayor a menor </option>
                           <option value="5">Menor a mayor</option>
                        </select>
                        <input type="submit" value="price">
                        <?php
                           $orden = $_POST ["price"];
                         ?>
                        <?php 
                            if ($orden == 3): 
                            $type_orden = $products; 
                            elseif ($orden == 4):            
                            $type_orden = $pr_desc; 
                            elseif ($orden == 5): 
                            $type_orden = $pr_asc;
                            endif; 
                        ?>
                        </form>
                    </small>
                </th>
                <th>Quantity
                <small>
                        <form action= "../juan/indexj.php" method="post">
                        <select name="quantity" id="quantity">
                           <option value="6" selected >Default</option>
                           <option value="7">Mayor a menor </option>
                           <option value="8">Menor a mayor</option>
                        </select>
                        <input type="submit" value="quantity">
                        <?php
                           $orden = $_POST ["quantity"];
                        ?>
                        <?php
                            if ($orden == 6): 
                            $type_orden = $products; 
                            elseif ($orden == 7):            
                            $type_orden = $quan_desc; 
                            elseif ($orden == 8): 
                            $type_orden = $quan_asd;
                            endif; 
                        ?>
                        </form>
                    </small>
                </th>
                <th>Image</th>
            </tr>
        </thead>
    <tbody>
    <?php

$query = "SELECT * FROM products ";
$resultado=$connect->query($query);
while ($fila = mysqli_fetch_array($type_orden))
{

?>

       <tr align="center">
        
            <td><?php echo $fila["id"]?></td>
            <td><?php echo $fila["products"]?></td>
            <td><?php echo $fila["categories"]?></td>
            <td><?php echo $fila["description"]?></td>
            <td><?php echo $fila["price"]?></td>
            <td><?php echo $fila["quantity"]?></td>
            <td><img height= "200px" src='../../products/image/<?php echo $fila["image"]?>'></td>
            </small>
            <br> <td>
            </small>
            <br>
            <small><td><a href="detailjuan.php?id=<?php echo $fila['id']; ?>">Details</a></td></small>
              <small><td><a href="formulario_update.php?id=<?php echo $fila['id']; ?>">Update product</a></td></small> 
              <small><td><a href="delete_queryjuan.php?id=<?php echo $fila['id']; ?>">Delete product</a></td></small> 
            </tr>
            <?php
            }
?>
    </tbody>
    </table>

</body>
</html>