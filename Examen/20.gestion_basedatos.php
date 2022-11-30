<?php
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexión con éxito <br>";

    //INSERTAR NUEVO USUARIO
    $insert = "insert into usuarios(nombre, clave, rol)
        values('Alberto', '33333', '1');";
    $resultado = $bd->query($insert);

    if ($resultado) {
        echo "insert correcto";
        echo "Filas insertadas. ". $resultado->rowCount(). '<br>';
    } else print_r ($bd->errorinfo());

    echo "Código de la fila insertada: ". $bd->lastInsertId(). '<br>';

    //ACTUALIZAR
    $update = "update usuarios set rol = 0 where rol = 1";
    $resultado = $bd->query($update);

    if ($resultado) {
        echo "update correcto";
        echo "Filas actualizadas. ". $resultado->rowCount(). '<br>';
    } else print_r ($bd->errorinfo());

    //BORRAR
    $delete = "delete from usuarios where nombre = 'Luisa'";
    $resultado = $bd->query($delete);

    if ($resultado) {
        echo "delete correcto";
        echo "Filas borradas. ". $resultado->rowCount(). '<br>';
    } else print_r ($bd->errorinfo());


} catch (PDOException $e) {
    echo 'Error con la base de datos: '. $e->getMessage();
}