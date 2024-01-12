<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <!-- navegacion de la pagina -->
    <nav>
    <ul>
        <li><a href="consulta.php">Consultar</a></li>
        <li> <a href="insertar.html">Insertar</a></li>
        <li><a href="modificar.html">Modificar</a></li>
        <li> <a href="eliminar.html">Eliminar</a></li>
        <li><a href="index.php">Inicio</a></li>
    </ul>
    </nav>
     <!-- formulario para eliminar ventas -->
    <form action="eliminarVentas.php" method="post">

        <label for="codigo">Codigo</label>
        <input type="text" name="codigo" id="codigo"> <br>

        <label for="refProducto">RefProducto</label>
        <input type="text" name="refProducto" id="refProducto"> <br>

        <input type="submit" value="Enviar" name="enviar">

    </form>

    <?php
    if(isset($_POST["enviar"])){
    include("funciones.php");
    eliminarVentas($_POST["codigo"], $_POST["refProducto"]);
    echo 'Venta eliminada';
    }

    ?>
</body>
</html>