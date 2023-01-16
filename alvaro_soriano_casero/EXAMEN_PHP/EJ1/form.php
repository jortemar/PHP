<?php
//inicamos la sesion
session_start();

//creamos la varible $i que la usaremos para contabilizar mas adelante
$i=0;

//si el indice de sesion no es nulo lo declaremos 
if(!isset($_SESSION['indice'])){
    $_SESSION['indice']=$i;
}
//si no lo es le asignaremos el valor a este
else{
    $i= $_SESSION['indice'];
}

//creamos un if que comprobara los arrays declarados como num 
//si este if determina que existe ese array en esa posicion 
//y no es null seguiremos la ejecucion
if (isset($_SESSION['num'.$i]) && $_SESSION['num'.$i]!=null){
    //obtendremos el array
    $tmp = $_SESSION['num'.$i];
    
    //creamos un if si comprobara si el array tiene ultima posicion
    //si la tiene y equivale a cero significara que esta serie en concreto a terminado
    if(isset($tmp[sizeof($tmp)-1]) && $tmp[sizeof($tmp)-1]==0 ){
        //le indicaremos al usuario que si quiere mostrar las series registras y terminar
        echo "a terminado de poner una serie si desea mostrar las series escriba MOSTRAR en el campo";
        echo "<br>";
        //si es asi definiremos el mostrar de sesion a true (esto lo usaremos mas adelante para
        //indicar cuando debemos mostrar un dato)
        $_SESSION['MOSTRAR']=true;

        //sumaremos una a i indicandole que pase al siguiente array , esto es para permitir al usuario volver
        //a insertar una siguiente serie una vez terminada
        $i++;
        //le asignaremos el valor a indice
        $_SESSION['indice']=$i;

    }
    else{
        //si lo anterior no se cumple esto estara en false
        $_SESSION['MOSTRAR']=false;
    }
}
else{
    //si lo anterior no se cumple esto estara en false
    $_SESSION['MOSTRAR']=false;
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="./index.php" method="post">
        <label> Introduce un valor o escribe 0 para terminar la serie</label>
        <input type="text" name="valor" id="valor">
        <input type="submit" value="enviar">
    
    </form>
  

</body>
</html>