<?php

/* los parámetros de la función son los valores
a, b y c, que hemos recogido del formulario */
function resolverEcuacion($a, $b, $c) {
    $denominador = 2 * $a;
    $contenidoRaiz = pow($b, 2) - (4 * $a * $c);
    $raiz = sqrt($contenidoRaiz);

    // si el denominador es distinto de 0, resolvemos con la fórmula de las ecuaciones de segundo grado
    if ($denominador != 0) {
        // si el contenido de la raiz es negativo la ecuación no tiene solución
        if ($contenidoRaiz < 0) {
            $resultado = false;
        // si el contenido de la raiz es 0 la ecuación tiene una única solución    
        } else if ($contenidoRaiz === 0) {
            $resultado[0] = -$b / $denominador;          
        // si el contenido de la raiz es positivo la ecuación tiene dos soluciones    
        } else {
            $resultado[0] = (-$b + $raiz) / $denominador;
            $resultado[1] = (-$b - $raiz) / $denominador;  
        }
    // si el denominador es 0 es porque $a es 0. De esta forma se convierte en
    // una ecuación de primer grado en la que podemos despejar el valor de x        
    } else
        $resultado[0] = -$c / $b;
    
    return $resultado;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valorA = $_POST['numA'];
    $valorB = $_POST['numB'];
    $valorC = $_POST['numC'];

    $solucion = resolverEcuacion($valorA, $valorB, $valorC);

    if ($solucion === false) {
        echo "La ecuación no tiene solución porque el contenido de la raíz es negativo";
    } else {
        print_r($solucion);
    }
}