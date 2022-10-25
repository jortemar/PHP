<?php
    //escribe un fichero que reciba el código de un usuario y muestre por pantalla todos sus datos
    $cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
    $usuario = 'root';
    $clave = '';
    try {
        $bd = new PDO($cadena_conexion, $usuario, $clave);
        echo "Conexión realizada con éxito";
        echo "<br>";
        $sql = 'SELECT codigo, nombre, clave, rol FROM usuarios WHERE codigo = $numUsu';
        $usuarios = $bd->query($sql);
        echo $usuarios->rowCount(). "<br>";
        foreach ($usuarios as $row) {
            print $row['codigo']. "\t";
            print $row['nombre']. "\t";
            print $row['clave']. "\t";
            

        }

        

    } catch (PDOException $e) {
            echo 'Error con la base de datos: '. $e->getMessage();
    }    
    