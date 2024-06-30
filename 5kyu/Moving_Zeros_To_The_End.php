5kyu - Moving Zeros To The End

Description:

Write an algorithm that takes an array and moves all of the zeros to the end, preserving the order of the other elements.

moveZeros([false,1,0,1,2,0,1,3,"a"]) // returns[false,1,1,2,1,3,"a",0,0]

<?php
function moveZeros(array $items): array
{
    $nonZeroArray = [];
    $zeroCount = 0;

    foreach ($items as $element) {
        if ($element !== 0 && $element !== 0.0) {
            $nonZeroArray[] = $element;
        } else {
            $zeroCount++;
        }
    }

    for ($i = 0; $i < $zeroCount; $i++) {
        $nonZeroArray[] = 0;
    }

    return $nonZeroArray;
}
?>

See on CodeWars.com: https://www.codewars.com/kata/52597aa56021e91c93000cb0
