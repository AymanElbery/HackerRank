<?php 

$arr = [3, 5, 1, 7, 9];

miniMaxSum($arr);

function miniMaxSum($arr) {

    $n = count($arr);
    for ($i=0; $i < $n; $i++) { 
        for ($j=0; $j < $n-1; $j++) { 
            if ($arr[$j] > $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }

    $miniSum = 0;
    $maxSum = 0;
    for ($c=0; $c < $n-1; $c++) { 
        $miniSum += $arr[$c];
    }
    for ($k=1; $k < $n; $k++) { 
        $maxSum += $arr[$k];
    }
    print_r($miniSum."\t".$maxSum);
    
}

?>