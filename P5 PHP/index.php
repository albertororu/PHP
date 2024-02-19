<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regristro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="index.php" method="post">
        <label for="username">Usuario</label>
        <input type="text" name="username" id="username"> <br>


        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">  <br>


        <input type="submit" name="enviar" value="Enviar">
    </form>

    <?php
    //funcion que incluye el inicio de sesion
    include('funciones.php');
    inicioSesion();
    ?>
</body>


</html> 