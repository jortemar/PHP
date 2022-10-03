<?php

    $numero = 8;
    $contador = 0;

    while ($numero % 2 == 0) {

        $contador++;
        $numero = $numero / 2;
    }
    
    echo "El número 8 se puede dividir entre 2 un total de $contador veces";
            
    