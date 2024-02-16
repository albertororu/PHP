<?php


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

    function insertar($id, $usuario, $pwd, $email)
    {

        session_start();
        try {
            $conn = new PDO("mysql:host=localhost; dbname=tarea4", "usu4", "usu4");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = 'INSERT INTO usuarios(id,usuario,pwd,email) VALUES (' . $id . ', "' . $usuario . '", "' . password_hash($pwd, PASSWORD_DEFAULT) . '", "' . $email . '")';
            $conn->exec($sql);

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function eliminar($id)
    {
        session_start();
        try {
            $conn = new PDO("mysql:host=localhost; dbname=tarea4", "usu4", "usu4");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = 'DELETE FROM usuarios WHERE id = ' . $id . ' ';
            $conn->exec($sql);

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    

        function modificar($id, $usuario, $email){
            session_start();
            try {
                $conn = new PDO("mysql:host=localhost; dbname=tarea4", "usu4", "usu4");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = 'UPDATE usuarios SET usuario = "'.$usuario.'", email = "'.$email.'" WHERE id = '.$id.'';
                $conn->exec($sql);

            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }

    
