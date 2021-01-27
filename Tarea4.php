<?php
/*Escribe un script en el que una misma variable tome dos valores distintos
 sin utilizar ninguna función. Luego añade al script una función que presente
 ese mismo nombre de variable con un valor distinto de los anteriores,
 comprobando que esta ultima opción no modificó el último valor de aquellos.*/

$Ejemplo = "Buenos dias"."\n"; //Cambiamos el valor de la variable sin usar una funcion;
echo $Ejemplo;

$Ejemplo = "Buenas noches";
echo $Ejemplo."\n";

// Ahora vamos a llamar a una funcion para cambiar su valor:
echo "Valor de la variable modificada a través de una función"."\n";
modificar($Ejemplo);

echo "\n"."Salimos de la funcion"."\n";
echo "Conservamos el valor que teníamos antes de ejecutar la función: ".$Ejemplo;

?>

<?php
function modificar ($Ejemplo) {
    //global $Ejemplo;
    echo "Antes el nombre de la variable era: ".$Ejemplo."\n";
    $Ejemplo = 15; //cambiamos el valor de la variable desde la funcion
    echo "Ahora es ".$Ejemplo."\n";
}

?>