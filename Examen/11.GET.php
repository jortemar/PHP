<?php
/* El método GET se utiliza para solicitar páginas web
al servidor. Se pueden pasar parámetros al servidor en
la URL utilizando ?variable=valor(&variable2=valor2) */

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
utilizando los dos parámetros que nos permiten
saltar los mensajes de error
*/