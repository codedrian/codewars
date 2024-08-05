<?php
/*LINK: https://www.codewars.com/kata/54ff3102c1bad923760001f3 */
/*TODO: Return the number (count) of vowels in the given string. The input string will only consist of lower case letters */
/*
1. Count the vowel occurences using substr_count
*/
function getCount($str)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vowelsCount = 0;

    foreach ($vowels as $vowel) {
        $vowelsCount += substr_count($str, $vowel);
    }
    echo $vowelsCount;
}
getCount('abracadabra');
