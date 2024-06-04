7Kyu - Find the divisors!

Description:
Create a function named divisors/Divisors that takes an integer n > 1 and returns an
array with all of the integer's divisors(except for 1 and the number itself), from
smallest to largest. If the number is prime return the string '(integer) is prime'

Example:
divisors(12); // => [2, 3, 4, 6]
divisors(25); // => [5]
divisors(13); // => '13 is prime'

<?php
function divisors($integer)
{
    $args = [];
    for ($i = 2; $i <= $integer/2; $i++) {
        $integer % $i == 0 ? $args[] = $i : null;
    }
    return count($args) ? $args : $integer . " is prime";
}
?>

See on CodeWars.com: https://www.codewars.com/kata/544aed4c4a30184e960010f4
