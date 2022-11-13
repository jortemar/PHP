<?php
    //apartado 1
    function conectarBaseDatos($ubicacion, $usuario, $password, $tabla) {
        
        if($db = mysqli_connect($ubicacion, $usuario, $password, $tabla)) {
            return $db;
        }
    }

    //CONEXIÓN ALTERNATIVA    
    /*
    try {
        $bd = new PDO($ubicacion, $usuario, $password, $tabla);
        echo "Conexión realizada con éxito";
        }

    } catch (PDOException $e) {
        echo 'Error con la base de datos: '. $e->getMessage();
    }    
    */

//ACTIVIDAD

/* 1. Crear una función conexión de base de datos con mysql. Comprobar que
funciona.
2. Mostrar una tabla de la BD empresa y mostrar sus datos.
3. Crear un formulario para añadir una tabla a la BD empresa (Los campos
pueden ponerlos el alumno.
4. Valida la inserción de en la tabla creada anteriormente
5. Editar la tabla creada.
6. Añade datos a la tabla anterior (por medio de un formulario). Se debe devolver
que la BD está actualizada.
7. Realizar los ejercicios tanto para mysqli, como para PDO */