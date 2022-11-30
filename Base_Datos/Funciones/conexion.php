<?php
    $cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
    $usuario = 'root';
    $clave = '';

    try {
        $bd = new PDO($cadena_conexion, $usuario, $clave);
        echo "Conexión realizada con éxito";
        echo "<br>";
        $ins = 'SELECT cod....       ';
        $usuarios = $bd->query($ins);

    } catch (PDOException $e) {
        echo 'Error con la base de datos: '. $e->getMessage();
    }
?>    
