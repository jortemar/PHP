<?php
    //funciones como argumento
    function calculador($operacion, $num1, $num2) {
        $resultado = $operacion($num1, $num2);
        return $resultado;
    }

    function sumar($a, $b) {
        return $a + $b;
    }

    function restar($a, $b) {
        return $a - $b;
    }

    $a = 4;
    $b = 5;

    $res1 = calculador("sumar", $a, $b);
    echo "$res1 <br>";
    $res2 = calculador("restar", $a, $b);
    echo "$res2 <br>";



    //se pueden especificar valores por defecto para los argumentos
    function saludar($nombre = "usuario") {
        echo "Hola $nombre";
    }
    
    saludar(); //Hola usuario
    saludar("Ana"); //Hola Ana


    //se pueden pasar parámetros por referencia usando '&'
    function duplicar($num) {
        $num *= 2;
    }

    function duplicarRef(&$num) {
        $num *= 2;
    }

    $numero = 4;
    duplicar($num); //El valor de $num seguirá siendo 4
    duplicarRef($num); //El valor de $num se multiplicará por 2 y será 8
?>    
