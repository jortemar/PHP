<?php
    //include "mifichero.php"; //da fallo E_NOTICE
    //require "mifichero.php"; //da fallo E_FATAL

    $a = "variable del principal";
    require "05.require(2).php";
    $b = "otra variable del principal";
    echo "En el script principal <br>";

    // coge la variable $a pero no la $b, que ha
    // sido definida después de llamar al fichero