<?php

// URL: https://www.hackerrank.com/challenges/birthday-cake-candles
/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles($candles) {
    $count = array_count_values($candles);
 
   return  $count[max($candles)];
}   
echo birthdayCakeCandles([3, 2, 1, 3]);
?>
