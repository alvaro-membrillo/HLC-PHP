<?php

    $langosta = 55;
    $angula = 80;
    $caviar = 600;

    /*Crear una estructura lógica para que devuelva cierto si dos de estas variables
    superen los precios de 50, 70 y 500, y falso en cualquier otro caso. Comprobarlo modificando
    los valores de las variables y viendo los resultados, subirlo como respuesta.*/

    /*Aclaración: Por ejemplo, se le pondrá a la langosta un valor que supere 50 y a la angula un
    valor que supere 70. Otro ejemplo: Un valor a la angula que supere 70 y un valor al caviar que
    supere 500. Solamente quedaría un caso más. Cualquier de ellos valdría. La estructura condicional
    deberá hacer las comprobaciones necesarias para que en esos casos descritos devuelva VERDADERO, y
    para el resto de casos devuelva FALSO.*/

    if($langosta > 50 XOR $angula > 70 XOR ($caviar > 400)) {
        echo "CIERTO";
    } else {
        echo "FALSO";
    }
    echo "\n";

?>