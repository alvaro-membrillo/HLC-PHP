<?php
    $a=23;
    $b="pepe";
    //probando el operador ++;
        print_r("Probando el operador ++");
        echo ++$a; //Suma 1 al valor inicial antes de mostrarlo
        echo "\n";
        echo ++$a*2; //Le suma un valor y lo multiplica por 2, por eso da 50 (la suma tiene prioridad en esta caso)
        echo "\n";
        echo ++$b; //Le suma una posicion (del diccionario) al último carácter de la palabra.
        echo "\n";
        echo ++$b*2; //Error por valor no numerico, porque no se pueden aplicar multiplicaciones a cadenas de caracteres
        echo "\n";
    //probando el operador --;
        print_r("Probando el operador --");
        echo "\n";
        echo --$a*2; //Al igual que con la suma, se aplica la resta y después se multiplica por 2, por eso da 48 {(25-1)*2}
        $b="pepe"; //cambiamos el valor a la variable $b
        echo "\n";
        echo $a+=5; //a vale 24, pero al aplicar essta operación se le suman 5, por eso da 29
        echo "\n";
        echo $a; //Se conserva el valor de la anterior operacion.
        echo "\n";
        echo 2*$a+=5; //Antes teníamos 29, al sumarle 5 da 34, lo que multiplicado por 2 es 68
        echo "\n";
        echo 2*$a; //el valor sigue siendo 34, que al multiplicarse por 2 tambien da 68
        echo "\n";
        echo $b+=5; //Error porque no se puede aplicar esta suma a una cadena de caracteres
        echo "\n";
        echo $b; //El valor se ha modificado a 5
        echo "\n";
        echo 2*$b+=5; //Da 20 porque primero le hemos sumado 5 y luego se ha multiplicado por 2
        echo "\n";
        echo 2*$b; //20 porque el valor de la variable sigue siendo 10 y despues la hemos multiplicado por 2
        echo "\n";
    //probando el operador –=n;
        print_r("Probando el operador -=n");
        echo "\n";
        echo $a-=5; //"a" valía 34, al restale 5 se nos queda en 29
        echo "\n";
        echo $a; //Se conserva la modificacion anterior, la cual es 29
        echo "\n";
        echo 2*$a-=5; //29-5 = 24, despues le multiplicamos 2, por eso se queda en 48
        echo "\n";
        echo 2*$a; //como lo hemos igualado antes a 24, al multiplicarlo por 2 nos da nuevamente 48
        echo "\n";
        echo $b-=5; //"b" valía 10 la última vez, ahora le hemos restado 5 y por eso da 5
        echo "\n";
        echo $b; //se mantiene el valor que hemos asignado segun la operación anterior
        echo "\n";
        echo 2*$b-=5; //5-5 = 0, se queda en 0
        echo "\n";
        echo 2*$b; //Sigue siendo 0 sin importar la multiplicacion.
        echo "\n";
    //probando operadores de post-incremento;
        print_r("Probando el operadores de post-incremento");
        echo "\n";
        echo $a++; //Nos muestra el valor anterior y le suma 1
        echo "\n";
        echo $a; //Nos muestra el nuevo valor de la variable, en la operacion anterior se le habia sumado 1
        echo "\n";
        //El valor que ya teniamos, 25, se ha multiplicado por 2, por eso da 50, aunque ahora el nuevo valor de "a" es 26
        echo 2*$a++;
        echo "\n";
        echo 2*$a; //26 * 2 = 52
        echo "\n";
        echo $a--; //muestra 26 y se le ha restado 1
        echo "\n";
        echo $a; //Muestra su valor actual, 25
        echo "\n";
        echo 2*$a--; //multiplica 25 * 2, por eso da 50, pero le restamos 1 a 25
        echo "\n";
        echo 2*$a; //El valor de $a es 24, que al multiplicarlo por 2 nos da 48
?>