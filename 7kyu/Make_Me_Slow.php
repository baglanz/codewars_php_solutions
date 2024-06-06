7Kyu - Make Me Slow

Description:
Make me slow! Calling makeMeSlow() should take at least 7 seconds.

<?php
function makeMeSlow() {
    $start = time();
    $i = 0;
    while (time() - $start < 7) {
        $i++;
    }
    return $i;
}
?>

See on CodeWars.com: https://www.codewars.com/kata/57f59da8d3978bb31f000152
