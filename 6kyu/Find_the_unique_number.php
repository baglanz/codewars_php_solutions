6kyu - Find the unique number

Description:

There is an array with some numbers. All numbers are equal except for one. Try to find it!

findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2
findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55
It’s guaranteed that array contains at least 3 numbers.

The tests contain some very huge arrays, so think about performance.

<?php
function find_uniq($a) {
    sort($a);

    return ($a[0] === $a[1]) ? end($a) : current($a);
}
?>

See on CodeWars.com: https://www.codewars.com/kata/585d7d5adb20cf33cb000235
