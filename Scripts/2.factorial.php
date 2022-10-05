<?php

    $numero = 5;
    $resultado = 1;

    do {
        $resultado = $resultado * $numero;
        $numero = $numero-1;
    } while ($numero > 1);
    

    echo "El resultado del factorial de 5 es $resultado";


