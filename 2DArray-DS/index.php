<?php 

$arr[0][0]=1; $arr[0][1]=1; $arr[0][2]=1; $arr[0][3]=0; $arr[0][4]=0; $arr[0][5]=0; 
$arr[1][0]=0; $arr[1][1]=1; $arr[1][2]=0; $arr[1][3]=0; $arr[1][4]=0; $arr[1][5]=0; 
$arr[2][0]=1; $arr[2][1]=1; $arr[2][2]=1; $arr[2][3]=0; $arr[2][4]=0; $arr[2][5]=0; 
$arr[3][0]=0; $arr[3][1]=0; $arr[3][2]=2; $arr[3][3]=4; $arr[3][4]=4; $arr[3][5]=0; 
$arr[4][0]=0; $arr[4][1]=0; $arr[4][2]=0; $arr[4][3]=2; $arr[4][4]=0; $arr[4][5]=0; 
$arr[5][0]=0; $arr[5][1]=0; $arr[5][2]=1; $arr[5][3]=2; $arr[5][4]=4; $arr[5][5]=0; 


hourglassSum($arr);

function hourglassSum($arr) {

    $n = count($arr[0]);
    $pivotArr = [];

    for ($i=1; $i < $n-1; $i++) { 
        for ($j=1; $j < $n-1; $j++) { 
            array_push($pivotArr, $i."-".$j);
        }
    }

    $hourglassSum = [];
    for ($c=0; $c < count($pivotArr); $c++) { 

        $x = explode("-", $pivotArr[$c])[0];
        $y = explode("-", $pivotArr[$c])[1]; 

        $sum = $arr[$x][$y];
        for ($i=$x-1; $i < $x+3; $i+=2) { 
            for ($j=$y-1; $j < $y+2; $j++) { 
                $sum += $arr[$i][$j];
            }
        }
        array_push($hourglassSum, $sum);
    }

    
    return max($hourglassSum);

}


?>