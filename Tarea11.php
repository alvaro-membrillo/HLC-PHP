<?php

$a[][]=" ";

$a[0][]="3-2";$a[0][]="5-3";$a[0][]="7-1";$a[0][]="0-2";

$a[][]="0-11";

$a[1][]=" ";$a[1][]="2-1";$a[1][]="1-0";$a[1][]="1-2";

$a[][]="0-0";

$a[2][]="1-3";$a[2][]=" ";$a[2][]="1-4";$a[2][]="2-0";

$a[][]="1-0";

$a[3][]="6-3";$a[3][]="14-3 ";$a[3][]=" ";$a[3][]="1-0";

$a[][]="1-1";

$a[4][]="2-3";$a[4][]="0-1 ";$a[4][]="1-1";$a[4][]="";

# Creamos la apertura de la tabla
print ("<TABLE BORDER=2>");
# ahora dos bucles anidados (rojo uno, magenta el otro)
# para rellenar las celdas de cada fila (el magenta)
# y para insertar las etiquetas <TR> utilizaremos el rojo
print ("<tr>"."<td colspan='6'>"."Todos los resultados de la liguilla"."</td>"."</tr>");
print ("<tr>"."<td>"."Indice"."</td>");
for ($i=0;$i<5;$i++){
	print("<td>".$i."</td>");
}

for ($i=0;$i<5;$i++){
	print("<tr>"."<td>".$i."</td>");
	for($j=0;$j<5;$j++) {	
		print("<td>".$a[$i][$j]."</td>");
	}
}

print("</table>");

print ("<br>"."<br>");

$b[][]="Indice";
$b[0][]="Juvencia";$b[0][]="Mosconia";$b[0][]="Canicas";$b[0][]="Condal";$b[0][]="Piloñesa";

$b[][]="Juvencia";
$b[1][]=" ";$b[1][]="3-2";$b[1][]="3-2";$b[1][]="5-3";$b[1][]="7-1";$b[1][]="0-2";

#ahora desde [1][0] hasta [1][4]
#este primero lo dejamos como automático en ambos indices
# de esta forma el primero tomará valor uno (siguiente al anterior)
# de forma automática
$b[][]="Mosconia";
# repetimos el proceso anterior
$b[2][]="0-11";$b[2][]=" ";$b[2][]="2-1";$b[2][]="1-0";$b[2][]="1-2";
# y repetimos de nuevo, ahora crearia 2 como primer indice
$b[][]="Canicas";
#insertariamos los restantes valores de indice 2
$b[3][]="0-0";$b[3][]="1-3";$b[3][]=" ";$b[3][]="1-4";$b[3][]="2-0";
# nuevo incremento del primer indice
$b[][]="Condal";
# rellenamos 
$b[4][]="1-0";$b[4][]="6-3";$b[4][]="14-3 ";$b[4][]=" ";$b[4][]="1-0";
# nuevo y ultimo incremento de primer indice
$b[][]="Piloñesa";
# rellenamos de nuevo
$b[5][]="1-1";$b[5][]="2-3";$b[5][]="0-1 ";$b[5][]="1-1";$b[5][]="";


print ("<TABLE BORDER=2>");
# ahora dos bucles anidados (rojo uno, magenta el otro)
# para rellenar las celdas de cada fila (el magenta)
# y para insertar las etiquetas <TR> utilizaremos el rojo

print("<td colspan='6'>Resultados de la liguilla</td>");

for ($i = 0; $i < 6; $i++){
	print("<tr>");
	for($j = 0; $j < 6; $j++ ) {
		print("<td>".$b[$i][$j]."</td>");
	}
}

print("</table>");

?>