<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <nav>
    <ul>
        <li><a href="consulta.php">Consultar</a></li>
        <form method="post" action="consulta.php">
            <select name="opciones" id="opciones">
                <option value="comerciales">Comerciales</option>
                <option value="productos">Productos</option>
                <option value="ventas">Ventas</option>
            </select>
            <input type="submit" value="enviar">
        </form>
        <li> <a href="insertar.html">Insertar</a></li>
        <li><a href="modificar.html">Modificar</a></li>
        <li> <a href="eliminar.html">Eliminar</a></li>
        <li><a href="index.php">Inicio</a></li>
    </ul>
    </nav>

    <?php
    include("funciones.php");

    if(isset($_POST["opciones"])){
    switch ($_POST["opciones"]) {
        case "comerciales":
            consultarComercial();
            break;
        case "productos":
            consultarProductos();
            break;
        case "ventas":
            consutarVentas();
            break;
    }
}
    
    ?>
</body>

</html>