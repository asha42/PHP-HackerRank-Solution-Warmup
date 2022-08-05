<?php
// URL: https://www.hackerrank.com/challenges/diagonal-difference

function diagonalDifference($arr) {
  $left_diagnol = 0;
  $right_diagnol = 0;
  $totl_element = count($arr);
  for($i=0;$i<=$totl_element;$i++){
      $left_diagnol+=$arr[$i][$i];
      $right_diagnol+=$arr[$i][$totl_element-$i-1];
  }
return abs($left_diagnol - $right_diagnol);
}
print_r(diagonalDifference([
    [1, 2, 5], 
    [4, 5, 6],
    [7, 8, 12]
]));

?>
