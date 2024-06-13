6kyu - Withdraw

Description:
Task
An ATM ran out of 10 dollar bills and only has 100, 50 and 20 dollar bills.

Given an amount between 40 and 10000 dollars (inclusive) and assuming that the ATM wants to use as few
bills as possible, determinate the minimal number of 100, 50 and 20 dollar bills the ATM needs to dispense (in that order).

Example
For n = 250, the result should be [2, 1, 0].

For n = 260, the result should be [2, 0, 3].

For n = 370, the result should be [3, 1, 1].

Input/Output
[input] integer n Amount of money to withdraw. Assume that n is always exchangeable with [100, 50, 20] bills.
[output] integer array An array of number of 100, 50 and 20 dollar bills needed to complete the withdraw (in that order).

<?php
function withdraw($n){
    $fifty = 0;
    $twenty = 0;
    $oneHundred = intdiv($n, 100);
    $n %= 100;

    if ($n % 100 == 10) {
        $oneHundred--;
        $fifty = 1;
        $twenty = 3;
    }

    if ($n == 20) {
        $twenty = 1;
    }

    if ($n % 100 == 30) {
        $oneHundred--;
        $fifty = 1;
        $twenty = 4;
    }

    if ($n == 40) {
        $twenty = 2;
    }

    if ($n == 50) {
        $fifty = 1;
    }

    if ($n == 60) {
        $twenty = 3;
    }

    if ($n == 70) {
        $fifty = 1;
        $twenty = 1;
    }

    if ($n == 80) {
        $twenty = 4;
    }

    if ($n == 90) {
        $fifty = 1;
        $twenty = 2;
    }

    return [$oneHundred, $fifty, $twenty];
}
?>

See on CodeWars.com: https://www.codewars.com/kata/58afce23b0e8046a960000eb
