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
 <!-- formulario para modificar datos -->
    <form method="POST" action="modificarProductos.php">
    <label for="referencia">Referencia</label>
        <input type="text" name="referencia" id="referencia"> <br>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="name"> <br>

        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" id="descripcion"> <br>

        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio"> <br>

        <label for="descuento">Descuento</label>
        <input type="text" name="descuento" id="descuento"> <br>

        <input type="submit" value="Enviar" name="enviar">
    </form>


    <?php
    if (isset($_POST["enviar"])) {
        include("funciones.php");
        $referencia = $_POST["referencia"];
        $name = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];
        $descuento = $_POST["descuento"];
       modificarProductos($referencia, $name, $descripcion, $precio, $descuento);
       echo 'Producto modificado';
    } 
    ?>
</body>
</html>