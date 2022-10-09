<?php
    
    function calculadora($operacion, $a, $b) {
        $resultado = $operacion($a, $b);
        return $resultado;
    }

  

    function suma($a,$b) {
        return $a + $b;
    }
    
    function multiplicacion($a,$b) {
        return $a * $b;
    }

    $final = calculadora("multiplicacion",3,8);
    echo $final;

?>    