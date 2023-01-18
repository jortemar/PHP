<?php
function resolverEcuacion($a, $b, $c, $d) {
    echo "Siendo los valores de a (". $a. "), b (". $b. "), c (". $c. "), y d (". $d. "):<br><br>";
    for ($i = 1; $i <= 6; $i++) {
        $resultado[$i] = $a * pow($i,6) + $b * pow($i, 4) - $c * pow($i, 3) - $d * pow($i, 2) - 7;
    }

    return $resultado;
}

// ejemplo de solución para ciertos valores de a, b, c y d
$soluciones = resolverEcuacion(3, 5, 2, 6);

for ($i = 1; $i <= 6; $i++) {
    echo "Cuando el valor de 'x' es ". $i. ", el valor de 'y' es ". $soluciones[$i]. '<br>';
}