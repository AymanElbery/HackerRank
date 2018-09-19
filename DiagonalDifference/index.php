<?php 

$arr = [11, 2, 4, 4, 5, 6, 10, 8, -12];

diagonalDifference($arr);

function diagonalDifference($arr) {

    $n = sqrt(count($arr));
    $x = $n + 1;   // for d1
    $y = $n - 1;   // for d2

    $d1 = [];
    $d2 = [];
    $sumD1 = $arr[0];
    for ($i=1; $i < $n ; $i++) { 
    	$sumD1 += $arr[$i*$x];
    }

    $sumD2 = 0;
    for ($j=1; $j <= $n ; $j++) { 
    	$sumD2 += $arr[$j*$y];
    }

    return abs($sumD1 - $sumD2);

}


?>