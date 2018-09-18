<?php 

$c = [0, 0, 0, 0, 1, 0];

jumpingOnClouds($c);

function jumpingOnClouds($c) {

    $n = count($c);
    $i = 0;
    $counter = 0;
    while ($i < $n-1) {
        if ($c[$i] == 0) {
            if ($c[$i+2] == 0) {
                $counter++;
                $i = $i+2;
            }elseif ($c[$i+1] == 0) {
                $counter++;
                $i = $i+1;
            }
        }
    }
    return $counter;
    
}


?>