<?php
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
?>    
