<?php

//funcion para mostrar la lista
function mostrarLista($lista){
    echo"<table>";
    for ($i = 0; $i < count($lista); $i++){
        echo "<tr><td>" . $lista[$i]->get_nombre() . "</td>";
        echo "<td>" . $lista[$i]->get_cantidad() . "</td>";
        echo "<td>" . $lista[$i]->get_precio() . "</td></tr>";

    }
        echo "</table>";
    }

//funcion para insertar productos
function insertar($lista, $elemento){
            array_push($lista, $elemento);
            return $lista;
}

//funcion para modificar
function modificar($lista, $nombre, $cantidad, $precio){
    $lista = new elemento($nombre, $cantidad, $precio);
}

//funcion para borrar
function borrar($lista, $elemento){
    if(isset($lista[$elemento])){
        unset($lista[$elemento]);
        $lista = array_values($lista);
        return $lista;
    }else{
        return null;
    }
}
?>