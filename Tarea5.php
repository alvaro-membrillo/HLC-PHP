<?php
    /*TAREA: Escribe un script que construya una pequeña página web en la que aparezca
    el texto "Hola mundo" (incluidas las comillas) . Trata de que todas las etiquetas HTML
    que utilices estén recogidas en variables PHP, de manera que no exista ninguna línea en
    el código fuente de la página que esté fuera de las etiquetas <?php ... ?>*/
    $html = "<html>";
    $htmlf = "</html>";
    $head = "<head>";
    $headf = "</head>";
    $body = "<body>";
    $bodyf = "</body>";

    $holamundo = '<h1>"Hola Mundo"</h1>';


    echo
        $html . "\n" .
        $head . "\n" .
        $body . "\n" .
        $holamundo . "\n" .
        $bodyf . "\n" . 
        $headf . "\n" .
        $htmlf
?>