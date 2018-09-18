<?php 

$s = "a";
$n = 10;

repeatedString($s, $n);

function repeatedString($s, $n) {

    $counter = 0;
    $counterRem = 0;
    $length = strlen($s);
    $rem = $n % $length; 
    $repeat = floor( $n / $length );
    for ($i=0; $i < $length; $i++) { 
        if ($s[$i] == "a") {
            $counter++;
        }
    }
    $remString= substr($s , 0 , $rem);
    for ($j=0; $j < strlen($remString); $j++) { 
        if ($remString[$j] == "a") {
            $counterRem++;
        }
    }
    $result = ( $counter * $repeat ) + $counterRem;
    return $result;

}


?>