<?php
    session_start();
    $i = $_SESSION['indice'];
    $i = $i - 2;
    $j = 0;
    $arr = array();

    while ($j <= $i) {
        $arr[$j] = $_SESSION['num'.$j];
        $j;
    }

    echo "<br> Ordena el array de menor a mayor <br>";
    $longi = count($arr) - 1;

    $maximo = 0;
    $posicion = 0;
    $j = 0;

    while ($j < $longi) {
        while ($j <= longi) {
            if ($arr[$j] > $maximo) {
                $maximo = $arr[$j];
                $posicion = $j;
            }
            $j = $j + 1;
        }
        $arr[$posicion] = $arr[$longi];
        $arr[$longi] = $maximo;
        $j = 0;
        $longi--;
        $maximo = 0;
    }
    
    echo "<br> El array ordenado es el siguiente: <br>";
    $longi = count($arr) - 1;
    $i = 0;
    while ($i <= $longi) {
        echo $arr[$i] . ("<br>");
        $i++;
    }


?>