6Kyu - Hofstadter Q

Description:
Hofstadter sequences are a family of related integer sequences, among which the first ones were
described by American professor Douglas Hofstadter in his book Gödel, Escher, Bach.

Task
Today we will be implementing the rather chaotic recursive sequence of integers called Hofstadter Q.

The Hofstadter Q is defined as follows:
Q(1) = Q(2) = 1,
Q(n) = Q(n-Q(n-1)) + Q(n-Q(n-2)), n > 2.

As the author states in the aforementioned book:

It is reminiscent of the Fibonacci definition in that each new value is a sum of two previous
values - but not of the immediately previous two values. Instead, the two immediately previous
values tell how far to count back to obtain the numbers to be added to make the new value.

The function produces the sequence

1, 1, 2, 3, 3, 4, 5, 5, 6, ..
Test info
100 random tests ( LC: 20 )

<?php
function hofstadter_q(int $n): int {
    if ($n < 1) {
        return 0;
    }
    $seq = [1, 1];

    for ($i = 2; $i < $n; $i++) {
        $seq[$i] = $seq[$i - $seq[$i - 1]] + $seq[$i - $seq[$i - 2]];
    }

    return $seq[$n - 1];
}
?>

See on CodeWars.com: https://www.codewars.com/kata/5897cdc26551af891c000124
