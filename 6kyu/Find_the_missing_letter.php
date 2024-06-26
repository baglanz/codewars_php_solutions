6kyu - Find the missing letter

Description:

Write a method that takes an array of consecutive (increasing) letters as input and that returns the missing letter in the array.

You will always get an valid array. And it will be always exactly one letter be missing.
The length of the array will always be at least 2.
The array will always contain letters in only one case.

Example:

['a','b','c','d','f'] -> 'e'
['O','Q','R','S'] -> 'P'

<?php
function find_missing_letter(array $array): string {
    for ($i = 0; $i < count($array) - 1; $i++) {
        if (ord($array[$i + 1]) - ord($array[$i]) > 1) {
            return chr(ord($array[$i]) + 1);
        }
    }

    return '';
}
?>

See on CodeWars.com: https://www.codewars.com/kata/5839edaa6754d6fec10000a2
