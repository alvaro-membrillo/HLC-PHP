<?php

$array = array();

echo '<center><table border=2>';

echo '<tr>';
for ($col = 0; $col <= 6; $col++) {

    $num = rand(1, 49);

    for ($i = 0; $i <= $col; $i++) {

        if ($num = $array[$i]) { //Si coincide hay que generar otro
            $num = rand(1, 49);
        }
    }
    
    echo '<td>';

    $array[$col] = $num;
    echo $num;

    echo '</td>'."\n";
}

echo '<tr>';

echo '</table></center>';

?>