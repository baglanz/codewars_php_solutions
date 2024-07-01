5kyu - The Hashtag Generator

Description:

The marketing team is spending way too much time typing in hashtags.
Let's help them with our own Hashtag Generator!

Here's the deal:

It must start with a hashtag (#).
All words must have their first letter capitalized.
If the final result is longer than 140 chars it must return false.
If the input or the result is an empty string it must return false.
Examples
" Hello there thanks for trying my Kata"  =>  "#HelloThereThanksForTryingMyKata"
"    Hello     World   "                  =>  "#HelloWorld"
""                                        =>  false

<?php
function generateHashtag($str) {
    $str = trim($str);

    if (empty($str)) {
        return false;
    }

    $words = explode(' ', $str);

    $newStr = '';
    foreach ($words as $word) {
        $newStr .= ucfirst($word);
    }

    $newStr = '#' . $newStr;

    if (strlen($newStr) > 140) {
        return false;
    }

    return $newStr;
}
?>

See on CodeWars.com: https://www.codewars.com/kata/52449b062fb80683ec000024
