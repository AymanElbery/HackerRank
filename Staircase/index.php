<?php 

$n = 4;

staircase($n);

function staircase($n) {

    
    for ($i=1; $i < $n+1; $i++) { 
        for ($c=0; $c < $n-$i; $c++) { 
            print_r(" ");
        }
        for ($j=0; $j < $i; $j++) { 
            print_r("#");
        }
        print_r("\n");
    }
    
}

?>