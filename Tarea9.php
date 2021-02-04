<?php
    $a=12; //en binario 1100;
    $b=23; //en binario 10111;
    $A="12"; //en binario 110001110010;
    $B="23"; //en binario 110010110011;
    //operador &;
    print_r($a&$b);
    echo "\n";
    print_r($A&$B);
    echo "\n";
    //operador |;
    print_r($a|$b);
    echo "\n";
    print_r($A|$B);
    echo "\n";
    //operador ^;
    print_r($a^$b);
    print_r($A^$B);
    echo "\n";
    //repite el código para el operador <<;
    echo "Codigo usando el operador '<<':" . "\n";
    print_r($a<<$b) . "desplaza los bits del valor $a, $b posiciones a la izquierda" . "\n";
    print_r($A<<$B) . "\n";
    echo "\n";
    //repite el código para el operador >>;
    echo "Codigo usando el operador '>>':" . "\n";
    print_r($a>>$b) . "Desplaza los bits del valor $a, $b posiciones a la derecha" . "\n";
    print_r($A>>$B) . "\n";
    echo "\n";
    //operador ~
    print_r(~$a);

?>