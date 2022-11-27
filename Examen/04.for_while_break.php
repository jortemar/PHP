<?php
    // bucle for
    for ($i = 0; $i < 5; $i++) {
       echo "$i <br>";
    }

    echo '<br>';

    // bucle while
    $i = 0;
    while ($i < 5) {
        echo "$i <br>";
        $i++;
    }

    echo '<br>';

    // bucle do while
    $i = 0;
    do {
        echo "$i <br>";
        $i++;
    } while ($i < 5);

    echo '<br>';

    // sentencia break
    echo "Primer for anidado: <br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo "i: $i j: $j <br>";
            if ($j == 1) {
                break; //es lo mismo que poner break 1
            }
        }
    }

    echo '<br>';

    echo "Segundo for anidado: <br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo "i: $i j: $j <br>";
            if ($j == 1) {
                break 2;
            }
        }
    }

    echo '<br>';

    $i = 0;
    echo "Primer switch anidado: <br>";
    while ($i < 2) {
        switch ($i) {
            case 0:
                echo "Es un cero <br>";
                break;
            case 1:
                echo "Es un uno <br>";
                break;
        }
        $i++;
    }

    echo '<br>';

    $i = 0;
    echo "Segundo switch anidado: <br>";
    while ($i < 2) {
        switch ($i) {
            case 0:
                echo "Es un cero <br>";
                break 2;
            case 1:
                echo "Es un uno <br>";
                break;
        }
        $i++;
    }

    echo '<br>';

    // continue para que no ejecute el echo para ese valor de i 
    for ($i = 0; $i < 5; $i++) {
        if ($i == 3) {
            continue;
        }
        echo "$i <br>";
    }