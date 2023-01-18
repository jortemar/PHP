<?php
/* en la cadena de conexión metemos el nombre
de la base de datos y la ip del servidor */
$cadena_conexion = 'mysql:dbname=pedidos;host=127.0.0.1';
$usuario = 'root';
$clave = '1234'; // en mi caso la contraseña es esta. Cambiar si es necesario

/* Lo primero que tenemos que hacer es conectar con la base de datos
Si la conexión es satisfactoria, la función nos devolverá un objeto PDO */
function conectarBaseDatos($cadena_conexion, $usuario, $clave) {
    try {
        return new PDO($cadena_conexion, $usuario, $clave);
    } catch (PDOException $e) {
        //si no se realiza la conexión dará el mensaje de error
        echo 'Error en la conexión con la base de datos: '. $e->getMessage();
    } 
}

/* Después tenemos que comprobar que la categoría que queremos introducir no existe.
Para ello hacemos un select de la categoría deseada. Si no nos arroja ningún resultado
(en cuanto a número de filas) es porque la categoría no existe y habrá que crearla */
// Además del código, pasamos el objeto PDO ($bd) por parámetro para poder hacer la consulta.
function comprobarCategoria($codCat, $bd) {
    $select = 'SELECT * FROM categorias WHERE CodCat ='. $codCat;
    $resultado = $bd->query($select);
    $contadorFilas = $resultado->rowCount();

    if ($contadorFilas == 0) {
        echo "La categoría ". $codCat. " no existe";
        $existe = false;
    } else {
        echo "La categoría ". $codCat. " sí existe";
        $existe = true;
    }
    // Nos devuelve un booleano true si existe, y false si no existe la categoría
    return $existe;
}

/* Además de los campos de la tabla, pasamos el objeto PDO
($bd) como parámetro para poder hacer la inserción */
function insertarCategoria($codCat, $nombre, $descripcion, $bd) {
    $insert = "INSERT INTO categorias(CodCat, Nombre, Descripcion)
                VALUES ('. $codCat. ','. $nombre. ','. $descripcion. ');";
    $resultado = $bd->query($insert);

    // si la inserción no se realiza correctamente nos saltará un mensaje de error
    if ($resultado) {
        echo "Insert correcto <br>";
    } else print_r($bd->errorinfo());
}

// Valores de ejemplo
$codCat = 4;
$nombre = "Postres";
$descripcion = "Platos dulces";

// Ejecutamos la primera función, que nos devolverá el objeto PDO ($bd)
$bd = conectarBaseDatos($cadena_conexion, $usuario, $clave);
// Si existe el objeto PDO (no es nulo) se ejecuta la función comprobarCategoría
if ($bd != null) {
    /* Si el booleano que devuelve comprobarCategoria() es true, se ejecuta la función insertarCategoria().
    En estas dos funciones pasamos como parámetros los valores deseados, así como el objeto PDO ($bd) */
    if (comprobarCategoria($codCat, $bd)) {
        insertarCategoria($codCat, $nombre, $descripcion, $bd);
    };
}