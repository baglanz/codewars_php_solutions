7Kyu - Isograms

Description:
An isogram is a word that has no repeating letters, consecutive or non-consecutive.
Implement a function that determines whether a string that contains only letters is an isogram.
Assume the empty string is an isogram. Ignore letter case.

Example: (Input --> Output)

"Dermatoglyphics" --> true
"aba" --> false
"moOse" --> false (ignore letter case)

<?php
function isIsogram($string)
{
    $string = strtolower($string);
    for ($i = 0; $i < strlen($string); $i++) {
        for ($j = $i + 1; $j < strlen($string); $j++) {
            if ($string[$i] == $string[$j]) {
                return false;
            }
        }
    }
    return true;
}
?>

See on CodeWars.com: https://www.codewars.com/kata/54ba84be607a92aa900000f1
