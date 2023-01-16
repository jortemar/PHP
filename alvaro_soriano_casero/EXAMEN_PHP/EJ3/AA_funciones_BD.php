<?php
//creamos la funcion fn_generar_conexion_msqli que dado los datos de conexion
//nos genera un elemento de conexion o da error en caso de fallar
function fn_generar_conexion_msqli($HOST, $USUARIO, $CLAVE, $BD)
{
    try {
        return new mysqli($HOST, $USUARIO, $CLAVE, $BD);
    } catch (mysqli_sql_exception $e) {
        echo  "no se pudo conectar a la base de datos usando los siguientes datos  [$HOST, $USUARIO, $CLAVE, $BD],
         codigo de error: " .  ($e->getMessage() . " " . $e->getCode());
    }
}





//creamos la funcion  fn_insertar_campos_tabla_msqli que dado un elemento
//de conexion , la tabla a insertar y los datos a insertar creara el
//sql necesario para insertar los
function fn_insertar_campos_tabla_msqli($conexion, $tabla,$insert)
{
    try {
        //creamos el  insert 
        $sql = "insert into $tabla values(";

        //creamos un for que creara el formato para el insert
        for ($i = 0; $i < count($insert); $i++) {
            $sql =  $sql . "'".$insert[$i]."',";
        }
        //eliminamos la coma al final y ponemos el parentesis
        $sql = substr($sql, 0, -1) . " );";
     
        //lanzamos el query
       $conexion->query($sql);

       echo "insercion realizada con exito";
    } catch (Exception  $e) {
        echo  "a habido un error: " .  ($e->getMessage() . " " . $e->getCode());
    }
    
  
}