<?php
//funcion que sumara el contenido del array
function sumar_serie($serie)
{
    //creamos una variable tmp
    $tmp = 0;
    //creamos el for each que lo sumara
    foreach ($serie as $clave => $valor) {
        $tmp = $valor + $tmp;
    }

    //retornamos $tmp

    return $tmp;
}

//funcion que restara todos los valores en la serie
function restar_serie($serie)
{
    //ordenamos el array de mayor a menor
    rsort($serie);

    //creamos la variable
    $tmp = 0;

    //la sumamos
    foreach ($serie as $clave => $valor) {
        $tmp = $tmp - $valor;
    }

    //la retornamos

    return $tmp;
}

//creamos la funcion que calculara la mediana
function calcular_mediana($serie)
{
    //asignamos el valor del array a una temporal
    $array_tmp = $serie;

    //la ordenamos
    sort($array_tmp);
    //obtenemos su tamaño
    $tam = sizeof($array_tmp);
    if ($tam > 0) {
        //retornamos su tam dividio entre dos redondeandolo para los impares
        return round($tam / 2);
        
    }
}
//funcion que calculara la varianza
function calcular_varianza($array)
{

    //contamos el tam 
    $tam = count($array);

    //creamos la variable varianza
    $varianza = 0.0;

    //obtenemos  la media
    $media = array_sum($array) / $tam;

    //creamos el for
    foreach ($array as $i) {
        $varianza += pow(($i - $media), 2);
    }
    //lo retornamos 
    return (float)sqrt($varianza / $tam);
}
function calcular_moda($array)
{
    $array_contados = array();
    foreach ($array as $i) {

        if (array_key_exists($i, $array_contados)) {
            $array_contados[$i] = $array_contados[$i] + 1;
        } else {
            $array_contados[$i] = 1;
        }
    }
    
    $maximos =  array_keys($array_contados, max($array_contados));
    return $maximos[0];
}
