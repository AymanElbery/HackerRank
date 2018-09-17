<?php 

$n = 15;
$ar = [6, 5, 2, 3, 5, 2, 2, 1, 1, 5, 1, 3, 3, 3, 5];

sockMerchant($n, $ar);

function sockMerchant($n, $ar) {

    $counter = 0;
    $colors = [];
    for ($i=0; $i < $n; $i++) { 
        if (!in_array($ar[$i] , $colors)) {
            array_push($colors ,$ar[$i]);
        }else{
            $counter++;
            unset($colors[array_search($ar[$i], $colors)]);
        }
    }
    return $counter;

}


?>