6kyu Pyramid Array

Description:

Write a function that when given a number >= 0, returns an Array of ascending length subarrays.

pyramid(0) => [ ]
pyramid(1) => [ [1] ]
pyramid(2) => [ [1], [1, 1] ]
pyramid(3) => [ [1], [1, 1], [1, 1, 1] ]
Note: the subarrays should be filled with 1s

<?php
function pyramid($n) {
    $result = array();
    for ($i = 1; $i <= $n; $i++) {
        $result[] = array_fill(0, $i, 1);
    }
    return $result;
}
?>

See on CodeWars.com: https://www.codewars.com/kata/515f51d438015969f7000013
