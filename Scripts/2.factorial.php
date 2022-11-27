<?php

    $numero = 5;
    $resultado = 1;

    do {
        $resultado = $resultado * $numero; // $resultado *= $numero;
        $numero--;
    } while ($numero > 1);
    

    echo "El resultado del factorial de 5 es $resultado";


