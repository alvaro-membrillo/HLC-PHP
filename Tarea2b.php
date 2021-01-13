<?php   
// Este comentario no se verá en la página
echo "Esto se leerá <br> "; // Esto no se leerá
/* Este es un comentario de
múltiples líneas y no se acabará
hasta que no cerremos así.... */
echo "Este es el segundo comentario que se leerá <br>";
# Este es un comentario tipo shell que tampoco se leerá
# Este, tampoco
echo ("Aquí el tercer texto visible<br>"); #comentario invisible
/* Cuidado con anidar
comentarios
multilinea con estos */

print_r ("al PHP no le gustan.");
echo " Salto de linea" . "\n"; //Con ECHO podemos poner varios campos en una sola linea.

print "Podemos escribir con print sin '()'";
print("Escrito con print con '()'<br>");
print_r("Escrito con print_r");

?>