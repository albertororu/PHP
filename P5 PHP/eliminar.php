<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="usuario.php">Crear usuario </a></li>
            <li><a href="modificar.php">Modificar datos </a></li>
            <li><a href="eliminar.php">Eliminar un usuario </a></li>
            <li><a href="logout.php">Cerrar sesion</a></li>
        </ul>
    </nav>
    <form action="eliminar.php" method="post">
        <label for="id">ID</label>
        <input type="number" name="id" id="id"> <br>
        <input type="submit" value="Enviar" name="enviar">
    </form>

    <?php
    if (isset($_POST["enviar"])) {
        include("funciones.php");
        eliminar($_POST["id"]);
    }
    ?>
</body>

</html>