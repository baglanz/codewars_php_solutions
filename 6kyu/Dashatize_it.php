6kyu - Dashatize it

Description:

Given an integer, return a string with dash '-' marks before and after each odd digit,
but do not begin or end the string with a dash mark.

Ex:

274 -> '2-7-4'
6815 -> '68-1-5'

<?php
function dash($num)
{
    $str = str_split($num);
    $result = '';

    foreach ($str as $key => $value) {
        $digit = intval($value);

        if ($digit % 2 !== 0) {
            if ($key > 0 && intval($str[$key - 1]) % 2 !== 0) {
                $result .= $value . '-';
            } else {
                $result .= '-' . $value . '-';
            }
        } else {
            $result .= $value;
        }
    }

    return trim($result, "-");
}
?>

See on CodeWars.com: https://www.codewars.com/kata/58223370aef9fc03fd000071
