<?php
    $var = 3;
    if ($var < 0) echo "Es menor que cero <br>";
    if ($var > 0) {
        echo "Es mayor que cero <br>";
    }

    $var2 = 3;
    if ($var2 < 0) {
        echo "Es menor que cero <br>";
    } else {
        echo "Es mayor o igual que cero <br>";
    }

    $var3 = 3;
    if ($var3 == 1) {
        echo "Es un uno <br>";
    } elseif ($var3 == 2) {
        echo "Es un dos <br>";
    } elseif ($var3 == 3) {
        echo "Es un tres <br>";
    } else {
        echo "No es un uno, ni un dos, ni un tres <br>";
    }

    $var4 = 3;
    switch ($var) {
        case 1:
            echo "Es un 1 <br>";
            break;
        case 2:
            echo "Es un 2 <br>";
            break;
        case 3:
            echo "Es un 3 <br>";
            break;
        default:
            echo "No es un 1, ni un 2, ni un 3";
    }

    /* El return detiene la ejecución del programa o
    de la función (depende de donde se encuentre) */
    $a = 0;
    if ($a == 0) {
        return;
    }
    echo "Después del if";
?>    