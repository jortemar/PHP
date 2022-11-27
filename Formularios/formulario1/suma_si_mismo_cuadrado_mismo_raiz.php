/*Dado cuatro numeros introducidos por teclado, a través
de un formulario. Realizar una función que me devuelva la suma 
de cada numero por si mismo, el cuadrado
del numero por si mismo y la raiz cuadrada del numero */

<?php
    session_start();
    $i = $_SESSION['indice'];

    if (!empty($_POST['num'])) {
        $_SESSION['num'.$i] = $_POST['num'];
        $i++;
        $_SESSION['indice'] =$i;
    }

    if ($_POST['num'] < 0) {
        header("Location:ordenar.php");
    }

?>





    function cosa($a, $b, $c, $d) {
        
    }




?>