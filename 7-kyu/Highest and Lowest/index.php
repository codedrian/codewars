<?php
/* LINK: https://www.codewars.com/kata/554b4ac871d6813a03000035
TODO: In this little assignment you are given a string of space separated numbers, and have to return the highest and lowest number.*/
/*NOTE: Tried to implement Single Responsibility principle*/
/* function getHighest($numbersArray)
{
    $highest = $numbersArray[0];
    for ($i = 0; $i < count($numbersArray); $i++) {
        if ($numbersArray[$i] > $highest) {
            $highest = $numbersArray[$i];
        }
    }
    return $highest;
}
function getLowest($numbersArray)
{
    $lowest = $numbersArray[0];
    for ($i = 0; $i < count($numbersArray); $i++) {
        if ($numbersArray[$i] < $lowest) {
            $lowest = $numbersArray[$i];
        }
    }
    return $lowest;
}
function highAndLow($numbers)
{
    $numbersArray = explode(' ', $numbers);
    return getHighest($numbersArray) . getLowest($numbersArray);
} */
function highAndLow($numbers)
{
    $numbersArray = explode(' ', $numbers);
    $numbers = array_map('intval', $numbersArray);
    return max($numbers) . ' ' . min($numbers);
}
echo highAndLow("1 2 3");
?>
