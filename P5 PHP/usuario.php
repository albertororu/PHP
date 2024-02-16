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

    class usuario
    {
        public $usuario;
        public $id;
        public $pwd;
        public $email;

        function __construct($usuario, $id, $pwd, $email)
        {
            $this->usuario = $usuario;
            $this->id = $id;
            $this->pwd = $pwd;
            $this->email = $email;
        }

        function set_usuario($usuario)
        {
            $this->usuario;
        }

        function set_id($id)
        {
            $this->id;
        }

        function set_pwd($pwd)
        {
            $this->pwd;
        }

        function set_email($email)
        {
            $this->email;
        }

        function get_usuario()
        {
            return $this->usuario;
        }

        function get_id()
        {
            return $this->id;
        }

        function get_pwd()
        {
            return $this->pwd;
        }

        function get_email()
        {
            return $this->email;
        }
    }


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