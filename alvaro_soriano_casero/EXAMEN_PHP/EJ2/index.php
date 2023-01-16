<?php
    function calcular_cuadratica($a,$b,$c){
        $resultado =Array();
        $d = $b*$b -4*$a*$c;
        $e = 2*$a;
        if ($d==0) {
        $resultado[0] = -$b/$e;
        $resultado[1] = $resultado[0];
        
        }
        else {
            if ($d>0) {
            $resultado[0] = (-$b + sqrt($d))/$e;
            $resultado[1] = (-$b - sqrt($d))/$e;
            }
            else {
            $resultado[0] = NAN;
            $resultado[1] = NAN;
            }
        }
           
        return $resultado;


        
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
       
        $a =$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];

      
        print_r(calcular_cuadratica($a,$b,$c));


    }