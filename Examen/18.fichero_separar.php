<?php
    $archivo = fopen("fichero_ejemplo.txt", "r");
    if ($archivo === FALSE) {
        echo "No se encuentra el archivo o no se ha podido leer";
    } else {
        // feof() 'find end of file' detecta si el archivo cuando el cursor se coloca al final del archivo
        // fgetc() va extrayendo el contenido del archivo caracter a caracter
        while (!feof($archivo)) {
            $caracter = fgetc($archivo).'<br>'; //si le añadimos .'<br>' comprobamos que los caracteres se apilan en columna;
            echo $caracter;
        }
    }

    fclose($archivo);