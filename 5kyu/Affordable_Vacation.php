5kyu - Affordable Vacation

Description:

The student has big plans for summer vacation after a stressful academic year.
He has saved up some money and decided to travel to a neighboring city for a few consecutive days.
Inspired by the desire to spend time in a new place, he compiled a list of housing rental
costs for each of the anticipated days and recorded them in an array named cost.

Task
Find the cheapest accommodation for student's vacation.
It is guaranteed that the length of the cost array is greater than or equal to the duration of the vacation.

If there is enough money for travelling, return the answer in the format:
"money: {minimum_money_for_vacation}"
Otherwise, return the maximum duration of the vacation in the format:
"days: {maximum_duration_of_vacation}"
Help the student find the optimal solution for his summer vacation!

Examples

| money | days | cost          | result      |
|-------|------|---------------|-------------|
| 10    | 1    | [5]           | "money: 5"  |
| 10    | 1    | [3, 2, 4]     | "money: 2"  |
| 10    | 2    | [3, 7, 6]     | "money: 10" |
| 10    | 1    | [20, 15, 30]  | "days: 0"   |
| 10    | 2    | [9, 6, 7]     | "days: 1"   |
| 50    | 3    | [10, 40, 5]   | "days: 2"   |

Constraints for random tests (depends on language)

|                      | small   | medium | extra_large  |
|----------------------|---------|--------|--------------|
| tests                | 10      | 10     | 10           |
| money                | 1-10    | 1-50   | 1 to 30-300M |
| days                 | 1-4     | 1-20   | 1 to 0.03-3M |
| cost.length          | 1-10    | 1-50   | 1 to 0.1-15M |
| cost[i]              | 1-10    | 1-10   | 1 to 400     |
| cost.length >= days  | true    | true   | true         |

<?php
function findMinCost($money, $days, $cost) {
    $n = count($cost);

    $minCost = PHP_INT_MAX;
    $currentCost = array_sum(array_slice($cost, 0, $days));

    for ($i = 0; $i <= $n - $days; $i++) {
        if ($i > 0) {
            $currentCost = $currentCost - $cost[$i - 1] + $cost[$i + $days - 1];
        }
        $minCost = min($minCost, $currentCost);
    }

    if ($money >= $minCost) {
        return "money: " . $minCost;
    } else {
        $left = 1;
        $right = $n;
        $maxDays = 0;

        while ($left <= $right) {
            $mid = (int)(($left + $right) / 2);
            $currentCost = array_sum(array_slice($cost, 0, $mid));
            $minCost = PHP_INT_MAX;

            for ($i = 0; $i <= $n - $mid; $i++) {
                if ($i > 0) {
                    $currentCost = $currentCost - $cost[$i - 1] + $cost[$i + $mid - 1];
                }
                $minCost = min($minCost, $currentCost);
            }

            if ($minCost <= $money) {
                $maxDays = $mid;
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }

        return "days: " . $maxDays;
    }
}
?>

See on CodeWars.com: https://www.codewars.com/kata/66871953e441f6da6e36a0cc
