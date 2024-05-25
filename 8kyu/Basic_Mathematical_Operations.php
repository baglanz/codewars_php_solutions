8Kyu - Basic Mathematical Operations

Description:
Your task is to create a function that does four basic mathematical operations.

The function should take three arguments - operation(string/char), value1(number), value2(number).
The function should return result of numbers after applying the chosen operation.

Examples(Operator, value1, value2) --> output
('+', 4, 7) --> 11
('-', 15, 18) --> -3
('*', 5, 5) --> 25
('/', 49, 7) --> 7

<?php

function calculate($op, $val1, $val2)
{
    if ($op == '+') {
        return $val1 + $val2;
    } elseif ($op == '-') {
        return $val1 - $val2;
    } elseif ($op == '*') {
        return $val1 * $val2;
    } elseif ($op == '/') {
        return $val1 / $val2;
    }
}

?>

See on CodeWars.com: https://www.codewars.com/kata/57356c55867b9b7a60000bd7
