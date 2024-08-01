<?php
/* Take an array and remove every second element from the array. Always keep the first element and start removing with the next element. */

function removeEveryOther($array) {
    echo array_filter($array, function($value, $key) {
        echo $key % 2 === 1;
    }, ARRAY_FILTER_USE_BOTH);
}

$array = ['1', 'remove', '1', 'remove', '1', 'remove', '1'];
removeEveryOther($array);
?>
