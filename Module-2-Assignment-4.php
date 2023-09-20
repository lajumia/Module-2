<?php


function fibonacci($limit){
    $n1 = 0;
    $n2 = 1;
    $sum = 0;

    for($i=0;$i<$limit;$i++){
        echo $n1."<br>";
        $n1 = $n1+$n2;
        $n2 = $sum;
        $sum = $n1;
    }

}

fibonacci(15);









?>