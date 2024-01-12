<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $colores = array("rojo", "verde", "azul", "amarillo");
    rsort($colores);
    foreach($colores as $clave){
        echo $clave;
        echo "<br>";
    }
   
    ?>
</body>
</html>