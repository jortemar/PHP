<?php

$valorA = $_POST['numA'];
$valorB = $_POST['numB'];
$valorC = $_POST['numC'];

/* los parámetros de la función son los valores
a, b y c, que hemos recogido del formulario */
function resolverEcuacion($a, $b, $c) {
    $bcuadrado = pow($b, 2);
    
    $raiz = sqrt($bcuadrado - (4 * $a * $c));
    if ($raiz < 0) {
        echo "La ecuación no se puede resolver porque la raiz arroja un número negativo";
    } else {
        $resultado1 = (-$b + $raiz) / (2 * $a);
        $resultado2 = (-$b - $raiz) / (2 * $a);

        echo "Una de las soluciones es $resultado1";
        echo "La otra solucion es $resultado2";
    }   
}

resolverEcuacion($valorA, $valorB, $valorC);