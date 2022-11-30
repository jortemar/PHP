<?php
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexión con éxito <br>";
    //comienza la transacción
    $bd->beginTransaction();
    $insert = "insert into usuarios (nombre, clave, rol)
        values('Fernando', '33333', '1')";
    $resultado = $bd->query($insert);
    if (!$resultado) {
        echo "Error: ". print_r($bd->errorinfo());
        //si da error se deshace el primer cambio
        $bd->rollback();
        echo "<br>Transacción anulada<br>";
    } else {
        //si todo ha ido bien se confirma la operación
        $bd->commit();
        echo "Transaccion realizada con éxito";
    }

} catch (PDOException $e) {
    echo 'Error al conectar: '. $e->getMessage();
}