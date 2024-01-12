<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación</title>
    <link rel="stylesheet" href="style.css">
    <!--cookie que muestra el color de fondo elegido-->
    <style>
        body{
            background-color: <?php if(isset($_COOKIE['color'])){
                echo $_COOKIE['color'];}  ?>
        }
    </style>
</head>

<body>

    <!-- Menú de navegación -->
    <nav>
        <ul>
            <li><a href="informacion.php">Página de Información</a></li>
            <li><a href="preferencias.php">Página de Preferencias</a></li>
            <li><a href="logout.php" >Cerrar Sesión</a></li>
        </ul>
    </nav>

    
    <?php
    // Iniciar la sesión
    session_start();
    // Actualizar la hora de la última conexión
    $_SESSION['ultima_conexion'] = time();

    ?>

    <h1>Bienvenido
    </h1>
    <p>Hora de conexión:
        <?php echo date('Y-m-d H:i:s', $_SESSION['ultima_conexion']); ?>
    </p>
</body>

</html>