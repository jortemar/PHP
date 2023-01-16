<?php
require './funciones.php';
    session_start();
    //obtendremos el indice
    $i = $_SESSION['indice'];
    //comprobaremos que el metodo recibido es post
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['valor'])) {
       
       //si el valor introducio es MOSTRAR y MOSTRAR esta atrue
        if( $_POST['valor']=='MOSTRAR' && $_SESSION['MOSTRAR'] == true){
            //creamos un for para recorrer los array
            for($z=0;$z<$i;$z++){
                //creamos un para asegurarnos de obtener valores que no sean nulos
                if(isset(($_SESSION['num'.$z]))  ){
                    //leemos el array
                    $array_leido= $_SESSION['num'.$z];
                    //lo mostramos por parametro y llamaremos a las funciones 
                    echo "Array numero: ".$z." valores  ";
                    print_r($array_leido);
                    echo "<br>";
                    echo "la suma de los valores del array es ".sumar_serie($array_leido);
                    echo "<br>";
                    echo "la resta de los valores del array es ".restar_serie($array_leido);
                    echo "<br>";
                    echo "la mediana de los valores del array es ".calcular_mediana($array_leido);
                    echo "<br>";
                    echo "la varianza de los valores del array es ".calcular_varianza($array_leido);
                    echo "<br>";
                    echo "la moda de los valores del array es ".calcular_moda($array_leido);

                    echo "<br>";
                }
                echo "<br>";
            }
            echo "mostrando";
        }

        else{
            //si lo anterior no se cumple y es numerico
            if(is_numeric($_POST['valor'])){
                
                //comprobaremos que la pos del array no sea nulo
                //si lo es lo inicializaremos primero
                if($_SESSION['num'.$i] == null){
                        $_SESSION['num'.$i]= Array();
                       
                }
                //le asignaremos el valor  de la pos al anterior mencionado
                $_SESSION['num'.$i][]=$_POST['valor'];

            }
            header("location: ./form.php");
        }
       
        
        
        
    }
