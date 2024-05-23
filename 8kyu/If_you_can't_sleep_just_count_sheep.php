8Kyu - If you can't sleep, just count sheep!!

Description:
Given a non-negative integer, 3 for example, return a string with a murmur:
"1 sheep...2 sheep...3 sheep...". Input will always be valid, i.e. no negative integers.


<?php

function countsheep($num){
    $result = '';
    for ($i = 1; $i <= $num; $i++) {
        $result .= $i . " sheep...";
    }
    return $result;
}
?>

See on CodeWars.com: https://www.codewars.com/kata/5b077ebdaf15be5c7f000077
