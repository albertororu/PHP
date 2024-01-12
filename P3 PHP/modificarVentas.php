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
     <!-- formulario para insertar venta -->
    <form method="POST" action="insertarVenta.php">
        <label for="codComercial">CodComercial</label>
        <input type="text" name="codComercial" id="codComercial"> <br>

        <label for="refProducto">RefProducto</label>
        <input type="text" name="refProducto" id="refProducto"> <br>

        <label for="cantidad">Cantidad</label>
        <input type="text" name="cantidad" id="cantidad"> <br>

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha"> <br>

        

        <input type="submit" value="Enviar" name="enviar">
    </form>


    <?php
    if (isset($_POST["enviar"])) {
        include("funciones.php");
        $codComercial = $_POST["codComercial"];
        $refProducto = $_POST["refProducto"];
        $cantidad = $_POST["cantidad"];
        $fecha = $_POST["fecha"];
        modificarVentas($codComercial, $refProducto, $cantidad, $fecha);
        echo 'Venta modificada';
    } 
    ?>

</body>

</html>