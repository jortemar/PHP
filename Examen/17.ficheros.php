<?php
//el primero se abrirá y el segundo dará error
//fopen() para abrir un archivo y fclose() para cerrarlo
$archivo = fopen("fichero_ejemplo.txt", "w+"); //si no existe se crea

if ($archivo === FALSE) {
    echo "No se ha encontrado el archivo fichero_ejemplo.txt";
} else {
    echo "El archivo fichero_ejemplo. txt se ha abierto con éxito";
}

$archivo = fopen("archivo_no_existe.txt", "r");

if ($archivo === FALSE) {
    echo "No se ha encontrado el archivo fichero_no_existe.txt";
} else {
    echo "El archivo fichero_no_existe.txt se ha abierto con éxito";
}


/* LEYENDA DE COMANDOS PARA ABRIR FICHEROS

r  -> solo lectura
r+ -> lectura y escritura
w  -> solo escritura
w+ -> lectura y escritura. Si el fichero no existe, se crea. Si existe, se trunca
a  -> solo escritura. Se escribe al final del archivo. Si no existe se crea, si existe se trunca
a+ -> lectura y escritura. Se escribe al final del fichero. Si no existe se crea, si existe se trunca

TODOS ELLOS, SI NO CUMPLEN CON SU COMETIDO, DEVUELVEN FALSE
*/

