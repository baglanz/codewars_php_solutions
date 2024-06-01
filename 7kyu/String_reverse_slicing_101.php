7kyu - String reverse slicing 101

Description:
You'll be given a string of characters as an input. Complete the function that returns a list of strings: (a) in the reverse order of the original string, and (b) with each successive string starting one character further in from the end of the original string.

Assume the original string is at least 3 characters long. Try to do this using slices and avoid converting the string to a list.

Examples
'123'   ==>  ['321', '21', '1']
'abcde' ==>  ['edcba', 'dcba', 'cba', 'ba', 'a']

<?php
function reverse_slice(string $s): array {
    $reverse = [];
    for ($i = strlen($s); $i >= 1; $i--) {
        $reverse[] = strrev(substr($s, 0, $i));
    }
    return $reverse;
}
?>

See on CodeWars.com: https://www.codewars.com/kata/586efc2dcf7be0f217000619
