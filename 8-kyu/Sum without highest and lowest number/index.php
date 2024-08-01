<?php
/* TODO: Sum all the numbers of a given array ( cq. list ), except the highest and the lowest element ( by value, not by index! ).The highest or lowest element respectively is a single element at each edge, even if there are more than one with the same value. */
/*
1. Sort
2.Sum 3. Shift n pop, 4. Sum
 */
function sumArray($array) {
    /* validation */
    if (count($array) == null) {
        return 0;
    }

    sort($array);
    array_shift($array);
    array_pop($array);
    $sum =array_sum($array);
    echo $sum;
    }
    $array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]; /* => 16 */
    sumArray($array)
?>
