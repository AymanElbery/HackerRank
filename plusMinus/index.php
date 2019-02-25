<?php 

$arr = [-4, 3, -9, 0, 4, 1];

plusMinus($arr);

function plusMinus($arr) {

    $pos = 0;
    $neg = 0;
    $zer = 0;
    for ($i=0; $i < count($arr); $i++) { 
        if ($arr[$i] > 0) {
            $pos++;
        }elseif($arr[$i] < 0){
            $neg++;
        }else{
            $zer++;
        }
    }

    print_r(number_format(($pos/count($arr)), 6, '.', '')."\n");
    print_r(number_format(($neg/count($arr)), 6, '.', '')."\n");
    print_r(number_format(($zer/count($arr)), 6, '.', ''));
    
}


?>