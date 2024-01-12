<?php
//Funcion INICIO DE SESION
function inicioSesion()
{
    session_start();
    if (isset($_POST['username'])) {
        try {
            $conn = new PDO("mysql:host=localhost; dbname=tarea4", "usu4", "usu4");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = 'SELECT * FROM usuarios WHERE usuario = "' . $_POST['username'] . '"';
            $lista = $conn->query($sql);
            foreach ($lista as $row) {
                if (password_verify($_POST['password'], $row['pwd'])) {
                    header('location: aplicacion.php');
                } else {
                    echo 'Usuario o contraseña incorrectos';
                }
            }
        } catch (PDOException $e) {
            echo ('Error:' . $e->getMessage());
        }
    }
}



?>