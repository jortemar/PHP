<?php

    $palabras = array(2,5,6,7);

    foreach ($palabras as $valor) {
        echo $valor. '<br>';
    }

    echo '<br>';

    $palabras[] = 9;
    $palabras[] = 10;

    foreach ($palabras as $valor) {
        echo $valor. '<br>';
    }