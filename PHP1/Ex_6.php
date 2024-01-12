<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      $estaturas = array("Juan" => "186", "Alberto" => "172", "Marta" => "173");
      krsort($estaturas);
      foreach($estaturas as $clave => $valor) {
        echo "Nombre: " . $clave  . ",  Estatura: " . $valor;
        echo "<br>";
      }
    ?>
</body>
</html>