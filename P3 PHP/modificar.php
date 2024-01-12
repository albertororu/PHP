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
    <form method="POST" action="modificar.php">
        <label for="codigo">Codigo</label>
        <input type="text" name="codigo" id="codigo"> <br>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="name"> <br>

        <label for="salario">Salario</label>
        <input type="text" name="salario" id="salary"> <br>

        <label for="hijos">Hijos</label>
        <input type="text" name="hijos" id="hijos"> <br>

        <label for="fNacimiento">fNacimiento</label>
        <input type="date" name="fNacimiento" id="fNacimiento"> <br>

        <input type="submit" value="Enviar" name="enviar">
    </form>

    <?php
    if (isset($_POST["enviar"])) {
        include("funciones.php");
        $codigo = $_POST["codigo"];
        $name = $_POST["nombre"];
        $salary = $_POST["salario"];
        $hijos = $_POST["hijos"];
        $fNacimiento = $_POST["fNacimiento"];
        modificarComercial($codigo, $name, $salary, $hijos,$fNacimiento);
        echo 'Comercial modificado';
    } 
    ?>
</body>
</html>