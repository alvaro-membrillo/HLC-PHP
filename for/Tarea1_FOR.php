<?php

/*Siguiendo criterios similares a los del ejemplo nº 40 elabora un script que permita construir una tabla de 5 filas y 7 
columnas que contengan los sucesivos números naturales desde 1 hasta 35. Utiliza bucles del tipo for, que igual que while
y do while permiten ser anidados.*/

echo '<center><table border = 2>';
$i = 1;

for ($fila = 1; $fila <= 5; $fila++) {
    echo '<tr>';
    
    for ($columna = 1; $columna <= 7; $columna++) {
        echo '<td>' . $i . '</td>';
        $i++;
    }

    echo '<br>';
    echo '</tr>';
}

echo '</table></center>';

?>