<?php 

$ar = [3, 2, 1, 3];

birthdayCakeCandles($ar);

function birthdayCakeCandles($ar) {

    $n = count($ar);
    $max = 0;
    $numberOfCandles = 1;
    for ($i=0; $i < $n; $i++) { 
        if ($ar[$i] > $max) {
            $max = $ar[$i];
            $numberOfCandles = 1;
        }elseif ($ar[$i] == $max) {
            $numberOfCandles++;
        }
    }
    return $numberOfCandles;
    
}

?>