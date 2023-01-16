<?php
    require './AA_funciones_BD.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //definimos las variables que vamos a usar para la conexion 
        //la clave y usuario puede cambiar cambialo a como lo tengas tu configurado
        $HOST       = 'localhost';
        $USUARIO    = 'root';
        $CLAVE      = '1234';
        $BD         = 'pedidos';
        $TABLA      = 'productos';
        
        $conexion = fn_generar_conexion_msqli($HOST, $USUARIO, $CLAVE, $BD);
        //si la conexion no es null  
        if($conexion!= null){
            //indicamos que nos hemos conectado
            echo "conexion exitosa con mysqli<br>";

            //creamos la variable que va almacenar los datos del insert
            $insert = Array();

            //creamos un for que consultara los datos pasados por el formulario 
            // de creacion
            for ($i = 1; $i <= 6; $i++) {
                $insert[]    = $_POST["Dato$i"];
            }
            //creamos el select que consultara si existe el codigo
            $select = 'SELECT count(*) as APARECE FROM categorias WHERE CodCat='.$insert[5];
            
            //obtenemos la consulta
            $resultado=mysqli_query($conexion,$select);

            //unimos la consulta en objeto para probar este
            $info=mysqli_fetch_assoc($resultado);
           
            //obtenemos del array retornado el valor de APARECE y revisaremos si es mayor a 0
            //si es asi significara que existe
            if($info['APARECE']>0){
                //llamaremos a la funcion fn_insertar_campos_tabla_msqli_y_pdo para realizar la insercion
                fn_insertar_campos_tabla_msqli($conexion, $TABLA,$insert);
            }
            else{
                echo "ERROR no existe la categoria ".$insert[5];
            }

          
            //fn_insertar_campos_tabla_msqli_y_pdo($conexion, $TABLA,$insert);
        }
        else{
            echo "el usuario o la contraseña es incorrecto";
        }


    }


?>