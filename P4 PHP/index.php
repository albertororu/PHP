<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regristro</title>
    <link rel="stylesheet" href="style.css">
    <!--cookie que muestra el color de fondo elegido-->
    <style>
        body{
            background-color: <?php if(isset($_COOKIE['color'])){
                echo $_COOKIE['color'];}  ?>
        }
    </style>
</head>

<body>
<nav><a href="informacion.php">Acceder como invitado</a></nav>
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