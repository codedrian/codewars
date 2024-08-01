<?php
/* Complete the function so that it finds the average of the three scores passed to it and returns the letter value associated with that grade. */
function getGrade($a, $b, $c){
    $average = ($a + $b + $c) / 3;

    if ($average >= 90) {
        echo 'A';
    } elseif ($average >= 80) {
        echo 'B';
    } elseif ($average >= 70) {
        echo 'C';
    } elseif ($average >= 60) {
        echo 'D';
    } else {
        echo 'D';
    }
}


getGrade(1000 ,1000,1000);
?>
