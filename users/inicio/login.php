<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login eloriginal_unid</title>
</head>

<body>
<center>
   <h1>INICIO DE SESIÓN</h1>
   
<form action="login_validation.php" method="POST">

<div class="elem">
  <input type="text" placeholder="Correo electrónico" name="email"/>
</div>

<div class="elem">
  <input type="password" placeholder="Contraseña" name="password"/>
</div>


<br><br>
<button type="submit" name="submit">Acceder</button>
</form>
<br>
<div class="elem">
<h3>¿Aún no estás registrado? <a href="register.php">REGISTRATE AQUÍ</a></h3>
   </div>
</center>
</body>
</html>