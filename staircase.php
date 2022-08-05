<?php

// URL: https://www.hackerrank.com/challenges/staircase
/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {
     
    for ($i = 0; $i < $n; $i++) {

        // Prints spaces (empty)
        echo str_repeat(" ", $n-1-$i);

        // Prints # symbols
        echo $str.="#";

        // Starts printing on a new line
        echo "\n";
    }

}

$n = intval(trim(fgets(STDIN)));

staircase(6);
?>
