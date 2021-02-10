<?php
/*TAREA: Escribe un script en el que uses cada uno de los operadores de comparación
que hemos descrito en esta página. Eligiendo las variables adecuadas, debes escribir
dos ejemplos –para cada uno de los operadores– de modo que uno de ellos devuelva CIERTO
y el otro FALSO. Comenta tu código para que sea fácilmente legible*/

$A = 105;
$B = 404;
$C = 404.00;
$D = 404;

if ($B == $C) {
    echo "CIERTO, son iguales";
}
echo "\n";
if($A == $C) {
    echo "FALSO, son diferentes";
}
echo "\n";
if ($A != $B) {
    echo "Verdadero, son diferentes";
}
echo "\n";
if ($C != $D) {
    echo "Falso, son iguales";
}
echo "\n";
if ($B === $D) {
    echo "CIERTO, ".$B." y ".$D." son iguales y del mismo tipo";
}
echo "\n";
if($B === $C) {
    echo "Falso, son de distinto tipo";
}

echo "\n";

if ($A < $B) {
    echo "CIERTO, ".$A." es menor que ".$B;
}

echo "\n";
if ($A > $B) {
    echo "FALSO, ".$A. " es menor que ".$B;
}

if ($B >= $C) {
    echo "CIERTO, ambos son iguales";
}

if ($B <= $A) {
    echo "CIERTO, ambos son iguales";
}

?>