<?php

function resolverSistema($a, $b, $c, $d) {
    echo "Siendo los valores de a (". $a. "), b (". $b. "), c (". $c. "), y d (". $d. "):<br><br>";

    /* Primero despejamos el valor de 'x' en la primera ecuación, y
    sustituimos su valor en la segunda ecuación para poder despejar 'y' */
    if ($a != 0 && $b != 0 && $c != 0 && $d != 0) {
        // Segunda ecuación
        $valorY = (15 * $a - 22 * $c) / ($c * $b - $d * $a);
        /* Primera ecuación (esta la he despejado antes que la otra, pero la
        he colocado debajo porque necesito el valor de 'y' para resolverla) */
        $valorX = ($b * $valorY + 22) / $a;

        $resultado = [
            'x' => $valorX,
            'y' => $valorY
        ];

    } else {
        /* Si hay algún valor de a, b, c, o d que sea
        cero, se devuelve un booleano false */
        $resultado = false;
    }
   
    return $resultado;
}

// ejemplo de solución para ciertos valores de a, b, c y d
$solucion = resolverSistema(2, 4, 6, 2);
if ($solucion) {
    print_r($solucion);
} else {
    echo "Los valores de a, b, c y d deben ser distintos de cero";
}
