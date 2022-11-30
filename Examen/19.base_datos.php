<?php
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexión con éxito <br>";
    $sql = 'SELECT nombre, clave, rol FROM usuarios';
    $usuarios = $bd->query($sql);
    foreach ($usuarios as $fila) {
        echo "nombre: ". $fila['nombre']. " , ";
        echo "clave: ". $fila['clave']. ' , ';
        echo "rol: ". $fila['rol']. '<br>';

    }
    //$bd->close();
} catch (PDOException $e) {
    echo 'Error con la base de datos: '. $e->getMessage();
}

//CONEXIÓN PERSISTENTE
/*
$bd = new PDO($cadena_conexion, $usuario, $clave,
        array(PDO::ATTR_PERSISTENT => true));
*/