<?php
    //apartado 1
    function conectarBaseDatos($ubicacion, $usuario, $password, $tabla) {
        //la función mysqli_connect directamente nos captura el error si lo hubiera
        if($db = mysqli_connect($ubicacion, $usuario, $password, $tabla)) {
            return $db;
        }
    }

    /*try {
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
    }    */