<?php
//url - https://www.hackerrank.com/challenges/one-week-preparation-kit-lonely-integer
function lonelyinteger($a) {
    $sort = array_count_values($a);
    return array_search(min($sort),$sort);
}
echo lonelyinteger([1,2,3,4,3,2,1]);

?>
