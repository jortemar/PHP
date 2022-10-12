<?php

    /* En el array superglobal POST se almacenan los campos introducidos
    en el html (clave = "name"), para que después podamos capturarlos en 
    el archivo. php */

    //echo "Usuario introducido: ". $_POST["usuario"];
    //echo "Clave introducida: ". $_POST["clave"];

    

    if ($_POST["usuario"] == "Jose" && $_POST["clave"] == 1234) {
        header("Location:bienvenido.html");  //la función header nos redirige a un html  
    } else 
        header("Location:error.html");
?>