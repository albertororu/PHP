<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
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
    <form method="POST" action="usuario.php">
        <label for="id">ID</label>
        <input type="text" name="id" id="id"> <br>

        <label for="nombre">Usuario</label>
        <input type="text" name="nombre" id="name"> <br>

        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña" required> <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />  <br>

        <input type="submit" value="Enviar" name="enviar">
    </form>

    <?php

    if (isset($_POST["enviar"])) {
        include("funciones.php");
        $id = $_POST["id"];
        $usuario = $_POST["nombre"];
        $pwd = $_POST["contraseña"];
        $email = $_POST["email"];
        insertar($id, $usuario, $pwd, $email);
    }
    ?>

</body>

</html>