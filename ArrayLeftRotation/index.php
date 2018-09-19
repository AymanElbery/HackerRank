<?php 

$a = [1, 2, 3, 4, 5];
$d = 4;

rotLeft($a, $d);

function rotLeft($a, $d) {

    $n = count($a);
    for ($i=0; $i < $d; $i++) { 
        for ($j=0; $j < $n-1; $j++) { 
            $temp = $a[$j];
            $a[$j] = $a[$j+1];
            $a[$j+1] = $temp;
        }
    }
    return $a;

}


?>