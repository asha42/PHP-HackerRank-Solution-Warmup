<?php

//URL = https://www.hackerrank.com/challenges/compare-the-triplets
 
function compareTriplets($a, $b) {
    $alice_points = 0;
    $bob_points = 0;
   for($i = 0;$i<=count($a);$i++){
       if($a[$i]>$b[$i]){
           $alice_points++;
       }else if ($a[$i]<$b[$i]){
           $bob_points++;
       }
   }
   
   return [$alice_points, $bob_points];
}
print_r(compareTriplets([1, 2, 3], [3, 2, 1]));
?>
