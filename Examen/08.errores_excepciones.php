<?php
    /* con la función error_reporting() podemos cambiar
    el valor de la directiva error_reporting en tiempo
    de ejecución. Indica qué tipo de errores se deben
    reportar. En este caso reportaría todos los errores */
    error_reporting(E_ALL);

    //EXCEPCIÓN CON TRY CATCH (Clase Exception)
    function dividir($a, $b) {
        if ($b == 0) {
            throw new Exception("El segundo argumento es 0");
        }
        return $a / $b;
    }

    /* nada más llamar a la función se detecta el error,
    por lo que no se ejecuta el echo del try. Se pasa
    directamente al catch, y después el finally */
    try {
        $resultado1 = dividir(5, 0);
        echo "El resultado 1 es $resultado1 <br>";
    } catch(Exception $e) {
        //echo "Excepción: $e->getMessage() <br>";
        echo "Excepción: ". $e->getMessage(). "<br>";
    } finally {
        echo "Primer finally <br>";
    }

    /* aquí no se produce la excepción, por lo que 
    se ejecuta el try, y después el finally */
    try {
        $resultado2 = dividir(5, 2);
        echo "El resultado 2 es $resultado2 <br>";
    } catch(Exception $e) {
        /* la llamada al método también funciona escrita
        de esta forma dentro de las comillas */
        echo "Excepción: $e->getMessage() <br>";
    } finally {
        echo "Segundo finally";
    }

    //EXCEPCIÓN TIPO ERROR (No heredan de la clase Exception)

    # clase Error

    # catch (Error $e) {
    # }
    
    # clase Throwable

    # catch (Throwable $e) {
    # }