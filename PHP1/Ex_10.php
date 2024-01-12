<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$cadena="Esto es un string de varias palabras";
echo "La cadena tien una longitud de " . strlen($cadena);
echo "<br>";
echo "La cadena tiene un total de " . str_word_count($cadena) . " palabras";
echo "<br>";
echo strtoupper($cadena);
?>
</body>
</html>