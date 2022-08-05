<?php
// URL: https://www.hackerrank.com/challenges/mini-max-sum
/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    for($i=0;$i<count($arr);$i++){
        $sum = 0;
       for($j=0;$j<=count($arr);$j++){
           if($i!=$j){
               $sum+= $arr[$j];
           }
          
       }
        
       $newarray[] = $sum;
    }
   echo min($newarray); 
   echo " ";echo max($newarray);
}

miniMaxSum([1, 3, 5, 7, 9]);
?>

<!---------------Anothet solution --------------------------->

<?php
// Prints two space-separated integers on one line: the minimum sum and the maximum sum of 4 of 5 elements
function miniMaxSum($arr) {

    // Calculates the sum of the array members
    $sum = array_sum($arr);

    // Calculates the difference between the sum and max
    // member of the array and between the sum and min
    echo ($sum-max($arr)) . ' ' . ($sum-min($arr));

}
miniMaxSum([1, 3, 5, 7, 9]);
?>
