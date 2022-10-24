<?php

    function saludar($nombre = "usuario") {
        echo "Hola $nombre <br>";
    }
    saludar();
    saludar("Ana");


    function potencia($base, $exp = 2) {
        return pow($base, $exp);
    }

    $resultado = potencia(3);
    echo ("El resultado de la potencia es $resultado");

?>