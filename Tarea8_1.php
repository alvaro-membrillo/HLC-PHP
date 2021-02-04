<?php
    # determinando el tipo de variable
    $a1=347;
    $a2=2147483647;
    $a3=-2147483647;
    $a4=23.7678;
    $a6="347";
    $a8="Solo literal";
    $a9="12.3 Literal con número";
    $a10="";
    
    #forzando los tipos
    echo ((real)$a1),"\n";      //No cambia el valor
    echo ((double)$a2),"\n";    //Cambia el valor a double
    echo ((float)$a3),"\n";     //Cambia el valor a float, 
    echo ((integer)$a4),"\n";   //Cambia el valor a Integer
    echo ((int)$a6),"\n";       //Cambia el valor a int
    echo ((int)$a8),"\n";       //Cambia el valor a int
    echo ((double)$a9),"\n";    //Cambia el valor a double, por eso muestra los numeros de la cadena de caracteres
    echo ((int)$a10),"\n";      //Cambia el valor a int
 
?>