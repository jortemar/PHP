<?php
    $arr1 = [
        0 => 444,
        1 => 222,
        3 => 333,
    ];

    print_r($arr1);
    echo '<br>';

    $arr2 = array(
        0 => 444,
        1 => 222,
        3 => 333,
    );

    // print_r imprime clave y valor del array
    print_r($arr2);
    echo '<br>';

    foreach ($arr2 as $valor) {
        echo "$valor <br>";
    }

    $arr3 = array(
        "Viernes" => 22,
        "Sábado" => 34,
    );

    // no modifica el array
    foreach ($arr3 as $cantidad) {
        $cantidad = $cantidad *2;
    }
    print_r($arr3);
    echo '<br>';

    // sí modifica el array. Utilizamos referencia (&)
    foreach ($arr3 as &$cantidad) {
        $cantidad = $cantidad * 2;
    }
    print_r($arr3);

    echo '<br>';

    $arr5 = array(10, 20, 30, 40);
    print_r($arr5);
    echo '<br>';
    $arr5[] = 5;
    print_r($arr5);
    echo '<br>';
    $arr5[10] = 6;
    $arr5[] = 5;
    print_r($arr5);
    
    