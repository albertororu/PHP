<link rel="stylesheet" href="style.css">
<?php

// INSERCCION DE DATOS 
function insertarComercial($codigo, $name, $salary, $hijos, $fNacimiento)
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=ventas_comerciales", "dwes", "dwes");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'INSERT INTO comerciales (codigo, nombre, salario, hijos, fNacimiento ) VALUES (' . $codigo . ',"' . $name . '", ' . $salary . ', ' . $hijos . ', "' . $fNacimiento . '")';
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function insertarProductos($referencia, $name, $descripcion, $precio, $descuento)
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=ventas_comerciales", "dwes", "dwes");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'INSERT INTO productos (referencia, nombre, descripcion, precio, descuento ) VALUES (' . $referencia . ',"' . $name . '", "' . $descripcion . '", ' . $precio . ', ' . $descuento . ')';
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function insertarVentas($codComercial, $refProducto, $cantidad, $fecha)
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=ventas_comerciales", "dwes", "dwes");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'INSERT INTO ventas (codComercial, refProducto, cantidad, fecha ) VALUES (' . $codComercial . ',' . $refProducto . ', ' . $cantidad . ', "' . $fecha . '")';
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}


//ELIMINACIÓN DE DATOS

function eliminarComercial($codigo)
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=ventas_comerciales", "dwes", "dwes");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'DELETE FROM comerciales WHERE codigo = ' . $codigo . '';
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function eliminarProductos($referencia)
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=ventas_comerciales", "dwes", "dwes");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'DELETE FROM  productos WHERE referencia = ' . $referencia . '';
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function eliminarVentas($codComercial, $refProducto)
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=ventas_comerciales", "dwes", "dwes");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'DELETE FROM ventas WHERE codComercial=' . $codComercial . ' AND refProducto = ' . $refProducto . '';
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

//CONSULTA DE DATOS 

function consultarComercial()
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=ventas_comerciales", "dwes", "dwes");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'SELECT * FROM comerciales';
        $lista = $conn->query($sql);
        echo '<table style=border:solid 1px black>';
        echo '<tr><th>codigo</th> <th>nombre</th> <th>salario</th> <th>hijos</th> <th>fNacimiento</th> </tr>';
        foreach ($lista as $row) {
            echo "<tr>";
            echo "<td>" . $row['codigo'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['salario'] . "</td>";
            echo "<td>" . $row["hijos"] . "</td>";
            echo "<td>" . $row["fNacimiento"] . "</td>";
            echo "</tr>";

        }
        echo '</table>';
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function consultarProductos()
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=ventas_comerciales", "dwes", "dwes");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'SELECT * FROM productos';
        $lista = $conn->query($sql);
        echo '<table style=border:solid 1px black>';
        echo '<tr><th>referencia</th> <th>nombre</th> <th>descripcion</th> <th>precio</th> <th>descuento</th> </tr>';
        foreach ($lista as $row) {
            echo "<tr>";
            echo "<td>" . $row['referencia'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['descripcion'] . "</td>";
            echo "<td>" . $row["precio"] . "</td>";
            echo "<td>" . $row["descuento"] . "</td>";
            echo "</tr>";
        }
        echo '</table>';
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function consutarVentas()
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=ventas_comerciales", "dwes", "dwes");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'SELECT * FROM ventas ';
        $lista = $conn->query($sql);
        echo '<table style=border:solid 1px black>';
        echo '<tr><th>codComercial</th> <th>refProducto</th> <th>cantidad</th> <th>fecha</th> </tr>';
        foreach ($lista as $row) {
            echo "<tr>";
            echo "<td>" . $row['codComercial'] . "</td>";
            echo "<td>" . $row['refProducto'] . "</td>";
            echo "<td>" . $row['cantidad'] . "</td>";
            echo "<td>" . $row["fecha"] . "</td>";
            echo "</tr>";
        }
        echo '</table>';
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

//MODIFICACIÓN DE DATOS 

function modificarComercial($codigo, $name, $salary, $hijos, $fNacimiento)
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=ventas_comerciales", "dwes", "dwes");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'UPDATE comerciales SET codigo = ' . $codigo . ', nombre = "' . $name . '", salario = ' . $salary . ', hijos = ' . $hijos . ', fNacimiento = "' . $fNacimiento . '" WHERE codigo = ' . $codigo . '';
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function modificarProductos($referencia, $name, $descripcion, $precio, $descuento)
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=ventas_comerciales", "dwes", "dwes");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'UPDATE productos SET referencia = ' . $referencia . ', nombre = ' . $name . ', descripcion = ' . $descripcion . ', precio = ' . $precio . ', descuento = ' . $descuento . ' WHERE referencia = ' . $referencia . '';
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function modificarVentas($codComercial, $refProducto, $cantidad, $fecha)
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=ventas_comerciales", "dwes", "dwes");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'UPDATE ventas SET codComercial = ' . $codComercial . ', refProducto = ' . $refProducto . ', cantidad = ' . $cantidad . ', fecha = "' . $fecha . '" WHERE codComercial = ' . $codComercial . '';
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

?>