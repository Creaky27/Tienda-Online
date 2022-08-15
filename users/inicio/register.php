<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register eloriginal_unid</title>
</head>
<body>
<center>
   <h1>REGISTRAR USUARIO</h1>

<form action="register_validation.php" method="POST">

<div class="elem">
  <input type="text" placeholder="Nombre de usuario" name="names"/>
</div>

<div class="elem">
  <input type="text" placeholder="Correo electrónico" name="email"/>
</div>

<div class="elem">
  <input type="password" placeholder="Contraseña" name="password"/>
</div>


<br><br>
<button type="submit" name="submit">Registrarse</button>

</form>

<div class="elem">
<h3><a href="login.php">VOLVER A LOGIN</a></h3>
   </div>
</center>
</body>
</html>