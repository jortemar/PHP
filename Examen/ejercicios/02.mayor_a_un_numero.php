<?php

function mayoresNumero($arr, $num) {
    $longitud = count($arr) - 1;
    for ($i = 0; $i <= $longitud; $i++) {
        if ($arr[$i] > $num) {
            $arr2[] = $arr[$i];
        }
    }
    return $arr2;
}

$numeros = [5, 3, 15, 9, 2, 6];
$arrMayores = mayoresNumero($numeros, 7);
print_r($arrMayores);

