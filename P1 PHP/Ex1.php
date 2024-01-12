<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table td {
      border: 1px black solid;
      padding: 2px;
    }
  </style>
</head>
<body>
    
<?php
//Se inserta la clase y funciones a realizar
require_once("item.php");
require_once("funciones.php");

//Inicializamos la sesion
session_start();

if (isset($_SESSION["lista"])){
$lista = $_SESSION["lista"];
}else{
    $lista = array();
}

//Escogemos una de las cuantro opciones que deseamos realizar

//Muestra la lista
if ($_GET['id'] == '1'){
  mostrarLista($lista);
}

//Inserta productos a la lista. Debemos recargar la página para que se muestre o ir a mostrar la lista
if ($_GET['id'] == '2'){
  $_SESSION['lista'] = insertar($lista, new elemento($_POST['nombre'], $_POST['cantidad'], $_POST['precio']));
  mostrarLista($lista);
  
}

//Borra productos a la lista. Debemos recargar la página para que se muestre o ir a mostrar la lista
if ($_GET['id'] == '3'){
  $elemento = $_POST['nombre'];
  $_SESSION['lista'] = borrar($lista,$elemento);
  mostrarLista($lista);
}

//Modifica productos a la lista. Debemos recargar la página para que se muestre o ir a mostrar la lista
if ($_GET['id'] == '4'){
  $_SESSION['lista'] = modificar($lista,$nombre,$cantidad,$precio);
  mostrarLista($lista);
}
  

?>
<a href="index.html">Vuelve al panel de control</a>
</body>
</html>
