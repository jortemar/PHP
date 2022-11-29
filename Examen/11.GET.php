<?php
/* El método GET se utiliza para solicitar páginas web
al servidor. Se pueden pasar parámetros al servidor en
la URL utilizando ?variable=valor(&variable2=valor2) */

/*Los parámetros que introducimos vía URL se almacenan
en el array superglobal $_GET. El nombre del argumento
será la clave del elemento del array.

/*la función empty() devuelve true si el
parámetro no está presente en la URL*/
if (empty($_GET["nombre"])) {
    echo "Error. Falta el parámetro nombre";
} else if (empty($_GET["apellido"])) {
    echo "Error. Falta el parámetro apellido";
} else 
    echo "Hola ". $_GET["nombre"]. " ". $_GET["apellido"];

/*
http://localhost/PHP/Examen/11.get.php
Aparece el primer echo

http://localhost/PHP/Examen/11.get.php?nombre=José
Aparece el segundo echo

http://localhost/PHP/Examen/11.get.php?nombre=José&apellido=Ortega    
Aparece el tercer echo. Se llama a la web
utilizando los dos parámetros ('nombre' y 'apellido') que
nos permiten esquivar los mensajes de error
*/