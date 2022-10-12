<?php

    /*el array superglobal GET atrapa los argumentos que se dan por URL.
    La clave con la que se guarde en el array será el nombre que le demos
    al parámetro que pasamos por URL.*/

    if (empty($_GET["nombre"])) {
        echo "Error, falta el parámetro nombre";
    } else
        echo "Hola ". $_GET["nombre"];