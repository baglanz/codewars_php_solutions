5kyu - Perimeter of squares in a rectangle

Description:

The drawing shows 6 squares the sides of which have a length of 1, 1, 2, 3, 5, 8.
It's easy to see that the sum of the perimeters of these squares is : 4 * (1 + 1 + 2 + 3 + 5 + 8) = 4 * 20 = 80

Could you give the sum of the perimeters of all the squares in a rectangle when there
are n + 1 squares disposed in the same manner as in the drawing:

Hint:
See Fibonacci sequence

Ref:
http://oeis.org/A000045

The function perimeter has for parameter n where n + 1 is the number of squares
(they are numbered from 0 to n) and returns the total perimeter of all the squares.

perimeter(5)  should return 80
perimeter(7)  should return 216

<?php
function perimeter($n) {
    $sum = 0;

    $baseSquare = 1;

    $firstSquare = $baseSquare;

    $squares = [$firstSquare];

    for ($i = 1; $i < $n; $i++) {
        $nextSquare = $squares[$i - 1] + ($squares[$i - 2] ?? $baseSquare);
        $squares[] = $nextSquare;
    }

    foreach ($squares as $square) {
        $sum += $square;
    }

    return 4 * ($sum + $baseSquare);
}

//function perimeter($n) {
//    $fibonacciNumbers = [1,1];
//    for($i = 2; $i <= $n; $i++){
//        $fibonacciNumbers[$i] = $fibonacciNumbers[$i-2] + $fibonacciNumbers[$i-1];
//    }
//    return 4 * array_sum($fibonacciNumbers);
//}
?>

See on CodeWars.com: https://www.codewars.com/kata/559a28007caad2ac4e000083
