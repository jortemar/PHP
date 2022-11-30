<?php
$cadena_conexion = 'mysql:dbname=pedidos;host=127.0.0.1';
$usuario = 'root';
// en mi caso la contraseña es 1234. Vaciar si es necesario para comprobación
$clave = '1234';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexión con éxito <br>";

    $insert = "insert into productos(nombre, descripcion, peso, stock, categoria)
        values('Chorizo', 'embutido muy rico', '12', 1);";
    $resultado = $bd->query($insert);

    if ($resultado) {
        echo "insert correcto";
        echo "Filas insertadas. ". $resultado->rowCount(). '<br>';
    } else print_r ($bd->errorinfo());

} catch (PDOException $e) {
    echo 'Error con la base de datos: '. $e->getMessage();
}
