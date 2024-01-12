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
<!-- formulario para eliminar productos -->
    <form action="eliminarProductos.php" method="post">

        <label for="referencia">Referencia</label>
        <input type="text" name="referencia" id="referencia"> <br>

        <input type="submit" value="Enviar" name="enviar">

    </form>

    <?php
    if(isset($_POST["enviar"])){
    include("funciones.php");
    eliminarProductos($_POST["referencia"]);
    echo 'Producto eliminado';
    }

    ?>
</body>
</html>