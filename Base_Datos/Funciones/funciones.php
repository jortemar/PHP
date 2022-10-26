<?php
    function conexion($base_datos, $host, $usuario, $clave) {
        $conexion = "mysql:$base_datos; host=$host";
        $bd = new PDO ($conexion, $usuario, $clave);
        return $bd;
    }
?>    