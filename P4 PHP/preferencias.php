<?php
//funcion para elegir el color de fondo
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie("color", $color, time() + 36000);
} else {
    if (isset($_POST['reset'])) {
        // Si se hace clic en el botón de restablecer, establece el color en 'white'
        $color = "white";
        setcookie("color", $color, time() + 36000);
    } else {
        if (isset($_COOKIE['color'])) {
            $color = $_COOKIE['color'];
        } else {
            $color = 'white';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias</title>
    <link rel="stylesheet" href="style.css">
</head>

<body <?php
echo "style='background-color:$color'" ?>>

    <!--navegacion por la pagina web-->
    <nav>
        <ul>
            <li><a href="informacion.php">Página de Información</a></li>
            <li><a href="aplicacion.php">Página de Aplicacion</a></li>
        </ul>
    </nav>

    <!--formulario para elegir el color de fondo-->
    <form action="preferencias.php" method="post">
        <label for="color">Que color de fondo desea</label>
        <input type="color" name="color" id="color" value="#FFFFFF"> <br>

        <input type="submit" value="Cambia color"> 
        <input type="submit" value="Restablecer color" name="reset">
    </form>


</body>

</html>