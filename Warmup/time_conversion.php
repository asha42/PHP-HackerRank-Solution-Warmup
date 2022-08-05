<?php
//URL - https://www.hackerrank.com/challenges/time-conversion
/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    // Write your code here
    // Determines if the date is PM or AM
    $pm = substr($s, -2) == 'PM' ? true : false;
    
    // Takes hour from the date
    $hour = substr($s, 0, 2);
    
    if ($hour == 12 AND !$pm)
        $hour = '00';
    
    if ($pm && $hour != 12)
        $hour += 12;
        
    return $hour . substr($s, 2, 6);
}
echo timeConversion('07:05:45PM'); 
