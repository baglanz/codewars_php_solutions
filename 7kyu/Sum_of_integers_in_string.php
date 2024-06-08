7Kyu - Sum of integers in string

Description:
Your task in this kata is to implement a function that calculates the sum of the
integers inside a string. For example, in the string
"The30quick20brown10f0x1203jumps914ov3r1349the102l4zy dog", the sum of the integers is 3635.

Note: only positive integers will be tested.

<?php
function sum_of_integers_in_string(string $s): int {
    preg_match_all('/\d+/', $s, $matches);
    return array_sum($matches[0]);
}
?>

See on CodeWars.com: https://www.codewars.com/kata/598f76a44f613e0e0b000026
