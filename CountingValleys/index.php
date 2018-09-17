<?php 

$n = 8;
$s = "UDDDUDUU";

countingValleys($n, $s);

function countingValleys($n, $s) {

    $step = 0;
    $v = 0;
    for ($i=0; $i < $n; $i++) { 
        if ($s[$i] == 'U') {
            $step += 1;
        }else{
            $step -= 1;
        }
        if ($step == 0 && $s[$i] == 'U') {
            $v += 1;
        }
    }
    echo $v;

}


?>