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
        </ul>
    </nav>
<!--CONEXION DE LA BASE DE DATOS -->
    <?php
    $servername = "localhost";
    $dbname = "ventas_comerciales";
    $username = "dwes";
    $password = "dwes";

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";


    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


    ?>
</body>

</html>