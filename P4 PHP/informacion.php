<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
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
<nav> <a href="index.php">Inicio</a> </nav>

    <p>El uso de esta página web es sencillo, una vez entras en index tienes la opción 
    de registarte o entrar como usuario invitado.
    Una vez dentro podrás moverte entre las paginas aplicacion y preferencias pudiendo 
    cambiar en esta el color de fondo.
    </p>

  
</body>
</html>