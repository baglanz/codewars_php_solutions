6kyu - Replace With Alphabet Position

Description:
In this kata you are required to, given a string, replace every letter with its position in the alphabet.

If anything in the text isn't a letter, ignore it and don't return it.

"a" = 1, "b" = 2, etc.

Example
Input = "The sunset sets at twelve o' clock."
Output = "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11"

<?php
function alphabet_position(string $s): string
{
    $num = '';

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];

        if (ctype_alpha($char)) {
            $char = strtolower($char);
            $num .= (strpos('abcdefghijklmnopqrstuvwxyz', $char) + 1) . ' ';
        }
    }
    return trim($num);
}
?>

See on CodeWars.com: https://www.codewars.com/kata/546f922b54af40e1e90001da
