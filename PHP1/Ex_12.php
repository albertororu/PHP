<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function calcula ($a, $b, $c){
    $raiz = sqrt($b**2-4*$a*$c);

    if($a == 0 && $raiz < 0 ){
        echo "No tiene solución";
        return false;
    }

    $x1 = (-$b+($raiz))/(2*$a); 
    $x2 = (-$b-($raiz))/(2*$a); 

    $resultado =array($x1, $x2);
    return $resultado;
}
  $resulta= calcula (2,3,4);
  foreach ($resulta as $x){
    echo "Resultado: {$x} ";
  }
?>

</body>
</html>