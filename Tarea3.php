<?php
   /* Vamos a crear un programa para cambiar de grados centigrados a grados Kelvin */
   define("K",273.15); //En esta constante queremos guardar los grados kelvin a los que corresponde 1 grado Cº
   define("Resultado", "El resultado es: "); //Con esta constante vamos a mostrar un texto antes del resultado de la operación

   function temperatura(){
      echo "Queremos pasar 15ºC a Kelvin: " . "\n";
      echo ("Aplicamos la fórmula (Grados + 273.15):" . "\n");
      print_r ("[Esta constante es de tipo cadena de caracteres] --> " . Resultado . "\n");
      print_r ("[Esta constante es de tipo numérico] --> " . (15+K));
   }
?>

<?php
temperatura();
?>

