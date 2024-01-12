<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }
    
    $suma = 0;
    for ($i = 2; $i < 100; $i++) {
        if (esPrimo($i)) {
            $suma += $i;
        }
    }
    
    echo "La suma de los números primos menores que 100 es: " . $suma;
    
    ?>
</body>
</html>