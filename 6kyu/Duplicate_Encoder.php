6kyu - Duplicate Encoder

Description:
The goal of this exercise is to convert a string to a new string where each character in the
new string is "(" if that character appears only once in the original string, or ")" if that
character appears more than once in the original string. Ignore capitalization when determining if a character is a duplicate.

Examples
"din"      =>  "((("
"recede"   =>  "()()()"
"Success"  =>  ")())())"
"(( @"     =>  "))(("
Notes
Assertion messages may be unclear about what they display in some languages. If you read
"...It Should encode XXX", the "XXX" is the expected result, not the input!

<?php
function duplicate_encode($word){
    $word = strtolower($word);

    $char_count = [];

    for ($i = 0; $i < strlen($word); $i++) {
        if (isset($char_count[$word[$i]])) {
            $char_count[$word[$i]]++;
        } else {
            $char_count[$word[$i]] = 1;
        }
    }

    $result = "";
    for ($i = 0; $i < strlen($word); $i++) {
        if ($char_count[$word[$i]] > 1) {
            $result .= ")";
        } else {
            $result .= "(";
        }
    }

    return $result;
}
?>

See on CodeWars.com: https://www.codewars.com/kata/54b42f9314d9229fd6000d9c
