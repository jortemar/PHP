<?php
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

    require_once('acceso.php');
    $db = conectarBaseDatos("localhost", "empre", "1234", "empresa");

    //apartado 2 (hecho con la tabla 'empleados')
    $sql = 'SELECT * FROM empleados';
    $usuarios = $db->query($sql);

        foreach ($usuarios as $row) {
            print 'Código Empleado: '. $row['CodEmple']. "<br>";
            print 'Nombre: '. $row['Nombre']. "<br>";
            print 'Primer Apellido: '. $row['Apellido1']. "<br>";
            print 'Segundo Apellido: '. $row['Apellido2']. "<br>";
            print 'Departamento '. $row['Departamento']. "<br><br>";
        }
    
