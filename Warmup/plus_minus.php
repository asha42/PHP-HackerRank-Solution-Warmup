<?php
// URL: https://www.hackerrank.com/challenges/plus-minus
/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]>0){
            $round[0]++;   
        }
        else if($arr[$i]<0){
            $round[1]++;   
        }else{
             $round[2]++;   
        }
    }
    
    $total = $round[0]+$round[1]+$round[2];
    echo round($round[0]/$total,6)."\n";
     echo round($round[1]/$total,6)."\n";
      echo round($round[2]/$total,6)."\n";
}
plusMinus([-4, 3, -9, 0, 4, 1]);

?>
