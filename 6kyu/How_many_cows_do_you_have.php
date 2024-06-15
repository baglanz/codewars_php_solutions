6kyu - How many cows do you have?

Description:
Consider having a cow that gives a child every year from her fourth year of life on and all her subsequent children do the same.

After n years how many cows will you have?

After n years	Cow count
    0	            1
    1	            1
    3           	2
    4              	3
    10          	28
Return null if n is not an integer.

Note: Assume all the cows are alive after n years.

<?php
function count_cows($y)
{
    if (!is_int($y) || $y < 0) {
        return null;
    }

    if ($y == 0) return 1;
    if ($y == 1) return 1;
    if ($y == 2) return 1;
    if ($y == 3) return 2;

    $cows = [];
    $cows[0] = 1;
    $cows[1] = 1;
    $cows[2] = 1;
    $cows[3] = 2;

    for ($i = 4; $i <= $y; $i++) {
        $cows[$i] = $cows[$i-1] + $cows[$i-3];
    }

    return $cows[$y];
}
?>

See on CodeWars.com: https://www.codewars.com/kata/58311536e77f7d08de000085
