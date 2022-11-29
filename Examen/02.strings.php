<?php
/* Las comillas dobles nos permiten insertar el valor
de la variable sin tener que estar concatenando */
    $var = "Paco";
    $a = "Hola $var <br>";
    $b = 'Hola $var';
    echo $a;
    echo $b;
    
    //FUNCIONES DE CADENAS
    //devuelve la longitud
    strlen($cadena); 
    //parte una cadena utilizando el token
    //como separador. Devuelve un array
    explode($cadena, $token); 
    //crea una cadena larga a partir de un array de 
    //cadenas. Entre cadena y cadena se introduce el token
    implode($token, $array);
    //compara las dos cadenas. Devuelve 0 si son iguales,
    //-1 si a es menor y 1 si b es mayor
    strcmp($cadena1, $cadena2);
    //convertir a minúsculas y mayúsculas, respectivamente
    strtolower($cadena);
    strtoupper($cadena);

?>    