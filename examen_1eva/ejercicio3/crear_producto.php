<?php
$cadena_conexion = 'mysql:dbname=pedidos;host=127.0.0.1'; //nombre de base de datos e ip del servidor
$usuario = 'root';
// en mi caso la contraseña es 1234. Vaciar si es necesario para comprobación
$clave = '1234';

//si la conexión es satisfactoria devuelve un objeto PDO
function conectarBaseDatos($cadena_conexion, $usuario, $clave) {
    try {
        return new PDO($cadena_conexion, $usuario, $clave);
    } catch (PDOException $e) {
        //si no se realiza la conexión dará el mensaje de error
        echo 'Error en la conexión con la base de datos: '. $e->getMessage();
    } 
}

//hacemos un select de las categorías. Si no arroja ningún resultado es porque la categoría no existe
function comprobarCategoria($categoria, &$bd) {
    $select = 'SELECT * FROM categorias WHERE CodCat ='. $categoria;
    $resultado = $bd->query($select);
    $contadorFilas = $resultado->rowCount();

    if ($contadorFilas == 0) {
        echo "La categoría ". $categoria. " no existe";
        $existe = false;
    } else {
        echo "La categoría ". $categoria. " sí existe";
        $existe = true;
    }
    // nos devuelve un booleano true si existe y false si no existe la categoría
    return $existe;
}

function insertarProducto($nombre_producto, $descripcion, $peso, $stock, $categoria, &$bd) {  
    $insert = "INSERT INTO productos(Nombre, Descripcion, Peso, Stock, Categoria)
        VALUES ('. $nombre_producto. ','. $descripcion. ','. $peso. ','. $stock. ','. $categoria. ');";
    $resultado = $bd->query($insert);

    if ($resultado) {
        echo "Insert correcto <br>";
        echo "Filas insertadas: ". $resultado->rowCount(). '<br>';
    } else print_r($bd->errorinfo()); //si no se realiza la inserción dará el mensaje de error
}

$nombre_producto = "chorizo";
$descripcion = "embutido";
$peso = 3;
$stock = 25;
$categoria = 1;

$bd = conectarBaseDatos($cadena_conexion, $usuario, $clave);
//si existe el objeto PDO (no es nulo) se ejecuta la función comprobarCategoría
if ($bd != null) {
    //si el booleano que devuelve comprobarCategoria() es true, se ejecuta la función insertarProducto()
    //en estas dos funciones pasamos como parámetros los valores deseados, así como el objeto PDO por referencia
    if (comprobarCategoria($categoria, $bd)) {
        insertarProducto($nombre_producto, $descripcion, $peso, $stock, $categoria, $bd);
    };
}