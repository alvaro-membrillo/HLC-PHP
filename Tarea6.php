<?php
/* Escribamos una función y llamémosla sinEstaticas
Definamos en ella dos variables sin ninguna otra especificación
e insertemos las instrucciones para que al ejecutarse
se escriban los valores de esas variables */

  function sinEstaticas(){
    $a = 0;
    $b = 0;
    
    echo "Valor inicial de $a: ",$a,"\n";
    echo "Valor inicial de $b: ",$b,"\n";

    $a += 5;
    $b -= 7;

    echo "Nuevo valor de $a: ",$a,"\n";
    echo "Nuevo valor de $b: ",$b,"\n";
  }

  function conEstaticas(){
    $a=0;
    /*Al estar declarada como variable estática, conserva el último valor que se le haya asignado,
    sin importar la salida o entrada de la funcion dentro del programa, por lo tanto se ira sumando,
    mientras que el resto de variables se resetearan cada vez que se llame a su funcion*/
    static $b=0;
    echo "Valor inicial de $a: ",$a,"\n";
    echo "Valor inicial de $b: ",$b,"\n";
    $a +=5;
    $b -=7;
    echo "Nuevo valor de $a: ",$a,"\n";
    echo "Nuevo valor de $b: ",$b,"\n";
  }

print ("Esta es la primera llamada a sinEstaticas()\n");
sinEstaticas();

print ("Esta es la segunda llamada sinEstaticas()\n");
print ("Debe dar el mismo resultado que la llamada anterior\n");
sinEstaticas();

print ("Esta es la primera llamada a conEstaticas()\n");
conEstaticas();

print ("Esta es la segunda llamada a conEstaticas()\n");
print ("El resultado es distinto a la llamada anterior\n");
conEstaticas();

?>