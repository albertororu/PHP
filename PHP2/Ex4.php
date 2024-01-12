<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function remove_duplicates($list){
        $numUni= array_values(array_unique($list));
        return $numUni;
    }
   $lista = array(1,1,2,2,3,4,5,5);
   print_r(remove_duplicates($lista));

    ?>
</body>
</html>