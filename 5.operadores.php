<?php   
    $a = 3;
    $b = "3";
    if ($a == $b) {  //las variables deben tener el mismo valor, aunque sean de distinto tipo
        echo "Son iguales <br>"; 
    }
    else {
        echo "No son iguales <br>";
    }
    if ($a === $b) {  //las variables deben tener el mismo valor y ser del mismo tipo
        echo "Son idénticos <br>";
    }
    else {
        echo "No son idénticos <br>";
    }