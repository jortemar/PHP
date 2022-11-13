<?php
    //apartado 2
    require_once('1.acceso.php');
    $db = conectarBaseDatos("localhost", "root", "1234", "empresa");

    //apartado 2 (hecho con la tabla 'empleados')
    $sql = 'SELECT * FROM empleados';
    $empleados = $db->query($sql);

        foreach ($empleados as $row) {
            print 'Código Empleado: '. $row['CodEmple']. "<br>";
            print 'Nombre: '. $row['Nombre']. "<br>";
            print 'Primer Apellido: '. $row['Apellido1']. "<br>";
            print 'Segundo Apellido: '. $row['Apellido2']. "<br>";
            print 'Departamento '. $row['Departamento']. "<br><br>";
        }
    
