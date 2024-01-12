<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_POST["idioma"] == "es"){
        setcookie("idioma", "es");
    } else {
        setcookie("idioma", "en");
    }
    
    if($_COOKIE['idioma'] == "en"){
        echo "This page is English";
    } else {
        echo "Esta pagina es en español";
    }
    ?>
    
</body>
</html>