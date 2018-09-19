<?php 

$ar = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];

aVeryBigSum($ar);

function aVeryBigSum($ar) {

    $n = count($ar);
    $sum = 0;
    for ($i=0; $i < $n; $i++) { 
        $sum += $ar[$i];
    }
    return $sum;

}


?>