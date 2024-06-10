6kyu - Persistent Bugger

Description:
Write a function, persistence, that takes in a positive parameter num and returns its multiplicative
persistence, which is the number of times you must multiply the digits in num until you reach a single digit.

For example (Input --> Output):

39 --> 3 (because 3*9 = 27, 2*7 = 14, 1*4 = 4 and 4 has only one digit, there are 3 multiplications)
999 --> 4 (because 9*9*9 = 729, 7*2*9 = 126, 1*2*6 = 12, and finally 1*2 = 2, there are 4 multiplications)
4 --> 0 (because 4 is already a one-digit number, there is no multiplication)

<?php
function persistence(int $num): int {
    $count = 0;
    while (strlen($num) > 1) {
        $arr = str_split($num);
        $product = 1;

        foreach ($arr as $digit) {
            $product *= $digit;
        }

        $num = $product;

        $count++;
    }

    return $count;
}
?>

See on CodeWars.com: https://www.codewars.com/kata/55bf01e5a717a0d57e0000ec
