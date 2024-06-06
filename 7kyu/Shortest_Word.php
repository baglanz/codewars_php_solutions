7Kyu - Shortest Word

Description:
Simple, given a string of words, return the length of the shortest word(s).

String will never be empty and you do not need to account for different data types.

<?php
function findShort($str){
    $words = explode(' ', $str);
    return min(array_map('strlen', $words));
}
?>

See on CodeWars.com: https://www.codewars.com/kata/57cebe1dc6fdc20c57000ac9
